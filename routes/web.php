<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\MerchantsController;
use App\Http\Controllers\MerchantProductsController;



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
    return view('index');
});
Route::resource('products', ProductsController::class);
Route::resource('categories', CategoriesController::class);
Route::resource('merchants', MerchantsController::class);
Route::resource('merchant_products', MerchantProductsController::class);
Route::get('/search', 'App\Http\Controllers\ProductsController@search');



