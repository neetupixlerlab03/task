<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyCRUDController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PostController;
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
Route::resource('demos', DemoController::class);
// Post controller
Route::resource('posts', PostController::class);
//phone controller
Route::get('PhoneList', [PhoneController::class, 'PhoneList'])->name('phone.list');
Route::get('phone', [PhoneController::class, 'index'])->name('phones.index');
Route::get('phone/create', [PhoneController::class, 'create'])->name('phones.create');
Route::post('phone/save', [PhoneController::class, 'store'])->name('phones.store');
Route::post('phone/{id}', [PhoneController::class, 'update'])->name('phones.update');
Route::get('phone/{id}', [PhoneController::class, 'show'])->name('phones.show');
Route::post('phone/delete/{id}', [PhoneController::class, 'destroy'])->name('phones.destroyj');
Route::get('addcartList', [AddCartController::class, 'addcartList'])->name('addcarts.List');
Route::post('addcarts/store', [AddCartController::class, 'addToCart'])->name('addcarts.store');
Route::post('addcarts/update-cart', [AddCartController::class, 'updateCart'])->name('addcarts.update');
Route::post('addcarts/delete/{id}', [AddCartController::class, 'removeCart'])->name('addcarts.delete');
Route::post('addcarts/clear', [AddCartController::class, 'clearAllCart'])->name('addcarts.clear');

 








