<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\ProductController::class, 'index']);
Route::get('/products/{id}', [App\Http\Controllers\ProductController::class, 'show']);

Auth::routes(['register' => false]);
// Route::get('/auth/redirect/{provider}', [App\Http\Controllers\SocialController::class, 'redirect']);
// Route::get('/callback/{provider}', [App\Http\Controllers\SocialController::class, 'callback']);


Route::middleware(['auth'])->group(function () {
	Route::middleware(['checkSuperAdmin'])->group(function () {
		Route::get('/admin/users', [App\Http\Controllers\AdminController::class, 'users']);
		Route::post('/update_users', [App\Http\Controllers\UserController::class, 'update']);
		Route::post('/create_users', [App\Http\Controllers\UserController::class, 'store']);
		Route::get('/delete_user/{id}', [App\Http\Controllers\UserController::class, 'destroy']);
		Route::post('/change-password/{user}', [App\Http\Controllers\UserController::class, 'changePassword']);

		Route::post('/update-status/{product}', [App\Http\Controllers\ProductController::class, 'updateStatus']);

		Route::get('/admin/categories', [App\Http\Controllers\AdminController::class, 'categories']);
		Route::post('/update_categories', [App\Http\Controllers\CategoryController::class, 'update']);
		Route::get('/delete_category/{id}', [App\Http\Controllers\CategoryController::class, 'destroy']);
		Route::get('/create_categories', [App\Http\Controllers\CategoryController::class, 'create']);
		Route::post('/create_categories', [App\Http\Controllers\CategoryController::class, 'store']);
		Route::get('/create_small_categories', [App\Http\Controllers\CategoryController::class, 'create_small_category']);
		Route::post('/upload_small_categories', [App\Http\Controllers\CategoryController::class, 'upload_small_category']);

		Route::get('/admin/banners', [App\Http\Controllers\AdminController::class, 'banners']);
		Route::post('/upload_banners', [App\Http\Controllers\BannerController::class, 'store']);
		Route::post('/update_banners', [App\Http\Controllers\BannerController::class, 'update']);
		Route::get('/delete_banner/{id}', [App\Http\Controllers\BannerController::class, 'destroy']);
	});

	Route::get('/admin/products', [App\Http\Controllers\AdminController::class, 'products'])->name('admin-products-list');
	Route::get('/admin/services', [App\Http\Controllers\AdminController::class, 'services']);
	Route::post('/multiuploads', [App\Http\Controllers\ProductController::class, 'uploadSubmit']);
	Route::post('/update_products', [App\Http\Controllers\ProductController::class, 'update']);
	Route::get('/delete_product/{id}', [App\Http\Controllers\ProductController::class, 'destroy']);

	Route::get('/admin/quantities', [App\Http\Controllers\AdminController::class, 'quantities']);
	Route::post('/create_quantity_types', [App\Http\Controllers\QuantityTypeController::class, 'store']);
	Route::post('/update_quantities', [App\Http\Controllers\QuantityTypeController::class, 'update']);
	Route::get('/delete_quantity/{id}', [App\Http\Controllers\QuantityTypeController::class, 'destroy']);
	Route::post('/update-quantity-status/{quantity}', [App\Http\Controllers\QuantityTypeController::class, 'updateStatus']);
});


// Route::get('/', [App\Http\Controllers\ProductController::class, 'index']);

// Route::get('/policy', function () {
//     return view('policy');
// });

// Route::get('/privacy_policy', function () {
//     return view('privacy');
// });