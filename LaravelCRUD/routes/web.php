<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyCRUDController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\NewProductController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\AddCartController;





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
    return view('welcome');
});





Route::resource('companies', CompanyCRUDController::class);

//Route::get('insert',[ DemoController::class,"index"]);
//Route::post('create',[ DemoController::class,"insert"]);
Route::resource('demos', DemoController::class);

// products controller
Route::get('product', [ProductController::class, 'productList'])->name('products.list');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

// Post controller
Route::resource('posts', PostController::class);
// Pruduct controller
//Route::resource('newproducts',NewProductController::class);
Route::get('newproducts', [NewProductController::class, 'productList'])->name('newproduct.list');
Route::get('create', [NewProductController::class, 'cartList'])->name('cart.list');
//phone controller


// Route::resource('phones',PhoneController::class);PhoneList
Route::get('PhoneList', [PhoneController::class, 'PhoneList'])->name('phone.list');
Route::get('phone', [PhoneController::class, 'index'])->name('phones.index');
Route::get('phone/create', [PhoneController::class, 'create'])->name('phones.create');
 Route::post('phone/save', [PhoneController::class, 'store'])->name('phones.store');
 Route::post('phone/{id}', [PhoneController::class, 'update'])->name('phones.update');
  Route::get('phone/{id}', [PhoneController::class, 'show'])->name('phones.show');
 Route::get('phone/{id}', [PhoneController::class, 'destroy'])->name('phones.destroy');
Route::get('addcartList', [AddCartController::class, 'addcartList'])->name('addcarts.List');
Route::post('addcarts/store', [AddCartController::class, 'addToCart'])->name('addcarts.store');
Route::post('clear', [AddCartController::class, 'clearAllCart'])->name('addcarts.clear');
Route::post('update-cart', [AddCartController::class, 'updateCart'])->name('addcarts.update');
Route::post('remove', [AddCartController::class, 'removeCart'])->name('addcarts.remove');
Route::post('clear', [AddCartController::class, 'clearAllCart'])->name('addcarts.clear');



