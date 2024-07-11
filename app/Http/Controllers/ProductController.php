<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Banner;
use App\Models\ProductImage;
use App\Models\QuantityType;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function __construct()
    {
        $agent = new \Jenssegers\Agent\Agent;
        $this->isMobile = $agent->isMobile();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected function fullTextWildcards($term)
    {
        // removing symbols used by MySQL
        $reservedSymbols = ['-', '+', '<', '>', '@', '(', ')', '~'];
        $term = str_replace($reservedSymbols, '', $term);

        $words = explode(' ', $term);

        foreach ($words as $key => $word) {
            /*
             * applying + operator (required word) only big words
             * because smaller ones are not indexed by mysql
             */
            if (strlen($word) >= 3) {
                $words[$key] = '+' . $word . '*';
            }
        }

        $searchTerm = implode(' ', $words);

        return $searchTerm;
    }

    public function index(Request $request)
    {
        $data = [];
        $selected_category = '';
        $selected_category2 = '';
        $data['q'] = '';

        $products = Product::where('products.type', 1)->where('status', Product::SHOW_STATUS);
        $services = Product::where('products.type', 2)->where('status', Product::SHOW_STATUS);
        $categories = Category::all();
        $product_categories = Category::select('id', 'name')->where(['type' => 1, 'parent_id' => null])->get();
        $service_categories = Category::select('id', 'name')->where(['type' => 2, 'parent_id' => null])->get();
        $banners = Banner::all();
        if ($request->q) {
            $q = $this->fullTextWildcards($request->q);
            $data['q'] = $request->q;
            $products = $products->selectRaw('products.*')
                ->join('users', 'users.id', '=', 'products.user_id')
                ->join('categories', 'categories.id', '=', 'products.category_id')
                ->whereRaw(
                    "MATCH(users.name, users.phone_number, users.email) AGAINST(? IN BOOLEAN MODE) OR
                             MATCH(products.name) AGAINST(? IN BOOLEAN MODE) OR
                             MATCH(categories.name) AGAINST(? IN BOOLEAN MODE)",
                    array($q, $q, $q)
                );
        }

        if ($request->category) {
            $selected_category = Category::findOrFail($request->category);
            $children_categories = Category::where('parent_id', $selected_category->id)->pluck('id')->toArray();
            array_push($children_categories, $selected_category->id);
            $products = $products->whereIn('category_id', $children_categories);
        }

        if ($request->category2) {
            $selected_category2 = Category::findOrFail($request->category2);
            $children_categories = Category::where('parent_id', $selected_category2->id)->pluck('id')->toArray();
            array_push($children_categories, $selected_category2->id);
            $services = $services->whereIn('category_id', $children_categories);
        }

        $products = $products->paginate(12, ['*'], 'product_page');
        $services = $services->paginate(12, ['*'], 'service_page');
        $data['products'] = $products;
        $data['services'] = $services;
        $data['product_categories'] = $product_categories;
        $data['service_categories'] = $service_categories;
        $data['selected_category'] = $selected_category;
        $data['selected_category2'] = $selected_category2;
        $data['categories'] = $categories;
        $data['banners'] = $banners;
        if (!$this->isMobile) {
            return view('product/pc/index', ['data' => $data]);
        }
        return view('product/sp/index', ['data' => $data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [];

        $product = Product::findOrFail($id);
        $productImages = $product->productImage;
        $otherProducts = Product::whereNotIn('id', [$id])->limit(10)->get();

        $data['product'] = $product;
        $data['productImages'] = $productImages;
        $data['otherProducts'] = $otherProducts;

        if (!$this->isMobile) {
            return view('product/pc/detail', ['data' => $data]);
        }
        return view('product/sp/detail', ['data' => $data]);
    }

    protected function create()
    {
        $data = [];

        $quantityTypes = QuantityType::select('id', 'name')->get();
        $categories = Category::select('id', 'name')->get();
        $data['quantityTypes'] = $quantityTypes;
        $data['categories'] = $categories;
        return view('product/pc/create-product', ['data' => $data]);
    }

    public function uploadSubmit(Request $request)
    {
        // Validate
        $this->validate($request, [
            'name' => 'required',
            'photos' => 'required',
            'category' => 'required|integer|exists:categories,id',
            'quantity_type' => 'required|integer|exists:quantity_types,id',
            'price' => 'required|integer',
        ]);
        $user_id = Auth::id();
        // kiểm tra có files sẽ xử lý

        $currentUser = Auth::user();
        $status = Product::PENDING_STATUS;
        $createForUser = $user_id;

        if ($currentUser->role === User::SUPER_ADMIN) {
            $status = Product::SHOW_STATUS;
            $createForUser = $request->user_id;
        }

        if ($request->hasFile('photos')) {
            $allowedfileExtension = ['jpg', 'png', 'jpeg'];
            $files = $request->file('photos');
            // flag xem có thực hiện lưu DB không. Mặc định là có
            $exe_flg = true;
            // kiểm tra tất cả các files xem có đuôi mở rộng đúng không
            foreach ($files as $file) {
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtension);

                if (!$check) {
                    // nếu có file nào không đúng đuôi mở rộng thì đổi flag thành false
                    $exe_flg = false;
                    break;
                }
            }
            // nếu không có file nào vi phạm validate thì tiến hành lưu DB
            if ($exe_flg) {
                // lưu product
                if ($request->available && $request->available == "on") {
                    $products = Product::create([
                        'name' => $request->name,
                        'user_id' => $createForUser,
                        'category_id' => $request->category,
                        'description' => $request->description,
                        'quantity_type_id' => $request->quantity_type,
                        'price' => $request->price,
                        'available' => true,
                        'type' => $request->type,
                        'status' => $status
                    ]);
                } else {
                    $products = Product::create([
                        'name' => $request->name,
                        'user_id' => $createForUser,
                        'category_id' => $request->category,
                        'description' => $request->description,
                        'quantity_type_id' => $request->quantity_type,
                        'price' => $request->price,
                        'available' => false,
                        'type' => $request->type,
                    ]);
                }
                // duyệt từng ảnh và thực hiện lưu
                foreach ($request->photos as $photo) {
                    $fname    = Str::random(40);
                    $photo = Image::make($photo->getRealPath());
                    $photo->resize(550, 500);
                    $filename = $photo->save(storage_path('app/public/products/' . $fname . '.' . $file->getClientOriginalExtension()));
                    ProductImage::create([
                        'product_id' => $products->id,
                        'file_name' => '/storage/products/' . $fname . '.' . $file->getClientOriginalExtension()
                    ]);
                }
                toastr()->success('Thêm sản phẩm thành công');
            } else {
                toastr()->warning('Thêm sản phẩm thất bại');
            }
        }
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $currentUser = Auth::user();
        $product = Product::findOrFail($request->product_id);
        $product->status = $currentUser->role == User::SUPER_ADMIN ? Product::SHOW_STATUS : Product::PENDING_STATUS;
        $product->user_id = $currentUser->role == User::SUPER_ADMIN ? $request->user_id : $product->user_id;

        if ($request->hasFile('photos')) {
            $allowedfileExtension = ['jpg', 'png', 'jpeg'];
            $files = $request->file('photos');

            foreach ($files as $key => $file) {
                $image = ProductImage::find($key);
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtension);

                if ($check) {
                    $fname    = Str::random(40);
                    $photo = Image::make($file->getRealPath());
                    $photo->resize(550, 500);
                    $filename = $photo->save(storage_path('app/public/products/' . $fname . '.' . $file->getClientOriginalExtension()));
                    $image->update(['file_name' => '/storage/products/' . $fname . '.' . $file->getClientOriginalExtension()]);
                }
            }
        }

        if ($request->hasFile('add-image')) {
            $allowedfileExtension = ['jpg', 'png', 'jpeg'];
            $files = $request->file('add-image');
            
            foreach ($files as $file) {
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtension);

                if ($check) {
                    $fname    = Str::random(40);
                    $photo = Image::make($file->getRealPath());
                    $photo->resize(550, 500);
                    $filename = $photo->save(storage_path('app/public/products/' . $fname . '.' . $file->getClientOriginalExtension()));
                    ProductImage::create([
                        'product_id' => $product->id,
                        'file_name' => '/storage/products/' . $fname . '.' . $file->getClientOriginalExtension()
                    ]);
                }
            }
        }

        if ($request->available && $request->available == "on") {
            $product->name = $request->name;
            $product->category_id = $request->category;
            $product->description = $request->description;
            $product->quantity_type_id = $request->quantity_type;
            $product->price = $request->price;
            $product->available = true;
            $product->type = $request->type;
        } else {

            $product->name = $request->name;
            $product->category_id = $request->category;
            $product->description = $request->description;
            $product->quantity_type_id = $request->quantity_type;
            $product->price = $request->price;
            $product->available = false;
            $product->type = $request->type;
        }

        if ($product->save()) {
            toastr()->success('Update sản phẩm thành công');
        } else {
            toastr()->warning('Update sản phẩm thất bại');
        }

        return redirect()->back();
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $productImage = ProductImage::where('product_id', $id)->get();
        $productImg = ProductImage::where('product_id', $id);
        foreach ($productImage as $image) {
            Storage::delete('/public/' . substr($image->file_name, 8));
        }

        if ($productImg->delete() && $product->delete()) {
            toastr()->success('Xóa sản phẩm thành công');
        } else {
            toastr()->warning('Xóa sản phẩm thất bại');
        }
        return redirect()->back();
    }

    public function updateStatus(Product $product, Request $request)
    {
        $product->update(['status' => $request->status]);
        toastr()->success('Cập nhập trạng thái thành công');

        return redirect()->back();
    }
}
