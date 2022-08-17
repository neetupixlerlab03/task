<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyCRUDController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\AddCartController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherSalaryController;




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
Route::post('addcarts/update-cart', [AddCartController::class, 'addToCart'])->name('addcarts.update');
Route::post('addcarts/delete/{id}', [AddCartController::class, 'removeCart'])->name('addcarts.delete');
Route::post('addcarts/clear', [AddCartController::class, 'clearAllCart'])->name('addcarts.clear');
//Test Controller
Route::get('tests',[TestController::class,'index']);
Route::get('tests/create',[TestController::class,'create'])->name('tests.create');
Route::post('store',[TestController::class,'store'])->name('tests.store');
//authontication 
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
//teacher controller
Route::get('teacher', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('teacher/store',[TeacherController::class,'store'])->name('teacher.store');
//teacher salary controller
Route::get('salary',[TeacherSalaryController::class,'create'])->name('create');
Route::post('salary/store',[TeacherSalaryController::class,'store'])->name('store');
Route::get('viewList',[TeacherSalaryController::class,'viewList'])->name('viewList');











