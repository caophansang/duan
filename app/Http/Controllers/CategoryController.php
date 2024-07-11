<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category/create');
    }

    public function create_small_category()
    {
        $categories = Category::all();
        return view('category/create_small_category', ['categories' => $categories]);
    }


    public function upload_small_category(Request $request)
    {
        $parent_category = Category::findOrFail($request->category_id);

        if(empty($request->small_category)) {
            toastr()->warning('Không có gì để thêm');
            return redirect()->back();
        }

        $raw_product_categories = $request->small_category;
        $product_categories = explode(',', $raw_product_categories);
        foreach ($product_categories as $item) {
            // $item = preg_replace('/\s+/', '', $item);
            Category::firstOrCreate(['name' => $item, 'type' => $parent_category->type, 'parent_id' => $parent_category->id]);
        }

        toastr()->success('Thêm thành công');
        return redirect()->back();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(empty($request->product_name) && empty($request->service_name)  ) {
            toastr()->warning('Không có gì để thêm');
            return redirect()->back();
        }

        $raw_product_categories = $request->product_name;
        $type = $request->type;
        $product_categories = explode(',', $raw_product_categories);

        if ($type == 1 || $type == 2) {

            foreach ($product_categories as $item) {
                // $item = preg_replace('/\s+/', '', $item);
                Category::firstOrCreate(['name' => $item, 'type' => $type]);
            }

            $raw_service_categories = $request->service_name;
            $service_categories = explode(',', $raw_service_categories);
            foreach ($service_categories as $item) {
                $item = preg_replace('/\s+/', '', $item);
                Category::firstOrCreate(['name' => $item, 'type' => $type]);
            }
        }

        toastr()->success('Thêm thành công');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function update(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $category->type = $request->type;
        $category->name = $request->name;

        if ($category->save()) {
            toastr()->success('Sửa thành công');
        } else {
            toastr()->warning('Sửa thất bại');
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $small_categories = Category::where('parent_id', $id)->get();

        if (!$small_categories->isEmpty()) {
            if ($category->delete() && $small_categories->delete()) {
                toastr()->success('Xóa thành công');
            } else {
                toastr()->warning('Xóa thất bại');
            }
        } else {
            if ($category->delete()) {
                toastr()->success('Xóa thành công');
            } else {
                toastr()->warning('Xóa thất bại');
            }
        }

        return redirect()->back();
    }
}
