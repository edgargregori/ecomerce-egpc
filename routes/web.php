<?php

use App\Models\ProductCategory\ProductCategory;
use App\Models\Product\Product;

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

Route::get('/', function () {
    return view('app');
    return Product::get();
    return ProductCategory::get();
});

Route::resource('/product', 'ProductController');
Route::get('/prod', 'ProductController@getProduct');

Route::get('/product_category', function () {
    return Product::with(['product_category'])->get();
    return Product::find(2)->product_category; //Product from ProductCategory 2.
    return ProductCategory::has("products")->get();//category without Products.
    return Product::has("product_category")->get();
    return ProductCategory::find(2)->products; //Product from ProductCategory 2.
    return ProductCategory::get();
});
