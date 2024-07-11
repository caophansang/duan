<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\QuantityType;
use App\Models\Category;
use App\Models\Banner;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function users()
    {
    	$users = User::select('*');
    	$users = $users->paginate(25);
    	return view('admin/users', ['users' => $users]);
    }

    public function products()
    {
		$data = $this->getDataProductOrService(Product::PRODUCT_TYPE);
		
    	return view('admin/products', $data);
    }

    public function services()
    {
    	$data = $this->getDataProductOrService(Product::SERVICE_TYPE);
		
    	return view('admin/services', $data);
	}
	
	protected function getDataProductOrService($type)
	{
		$currentUser = Auth::user();
		$categories = Category::where('type', $type)->get();
		$showStatus = Product::SHOW_STATUS;
		$pendingStatus = Product::PENDING_STATUS;
		$cancelStatus = Product::CANCEL_STATUS;
		$roleSuperAdmin = User::SUPER_ADMIN;
		$quantity_types = QuantityType::where('status', QuantityType::SHOW_STATUS)->get();

		if ($currentUser->role === User::SUPER_ADMIN) {
			$products = Product::with('productImage')->where('type', $type);		
			$users = User::all();
		} else {
			$products = Product::with('productImage')->where('type', $type)->where('user_id', $currentUser->id);
			$users = [];
		};
    	
		$products = $products->orderBy('id', 'desc')->paginate(25);
		
    	return compact(
			'products',
			'quantity_types',
			'users',
			'categories',
			'currentUser',
			'showStatus',
			'cancelStatus',
			'pendingStatus',
			'roleSuperAdmin'
		);
	}

    public function categories()
    {
    	$categories = Category::where('parent_id', null);
    	$categories = $categories->paginate(25);
    	$all_categories = Category::all();
    	return view('admin/categories', ['categories' => $categories, 'all_categories' => $all_categories]);
    }

    public function quantities()
    {
    	$quantities = QuantityType::select('*');
		$quantities = $quantities->paginate(25);
		$showStatus = QuantityType::SHOW_STATUS;
        $pendingStatus = QuantityType::PENDING_STATUS;
        $cancelStatus = QuantityType::CANCEL_STATUS;
		$currentUser = Auth::user();
		$roleSuperAdmin = User::SUPER_ADMIN;

        $data =compact(
            'showStatus',
            'pendingStatus',
            'cancelStatus',
			'currentUser',
			'quantities',
			'roleSuperAdmin'
		);
		
    	return view('admin/quantities', $data);
    }

    public function banners()
    {
    	$banners = Banner::select('*');
    	$banners = $banners->paginate(25);
    	return view('admin/banners', ['banners' => $banners]);
    }
}
