<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductShowController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\UnitController;
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

Route::get('/',[FrontendController::class,'home'])->name('home');




Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'register'])->name('register');


Route::post('/register',[RegisterController::class,'store'])->name('register.store');
Route::post('/login',[LoginController::class,'login'])->name('login.data');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


Route::group(['middleware'=>['protected_home']],function(){
    Route::get('/shop',[FrontendController::class,'shop'])->name('shop');
    Route::get('/about-us',[FrontendController::class,'about'])->name('about');
    Route::get('/cart',[FrontendController::class,'cart'])->name('cart');
    Route::get('/checkout',[FrontendController::class,'checkout'])->name('checkout');
    Route::get('/contact',[FrontendController::class,'contact'])->name('contact');
    Route::get('/profile',[FrontendController::class,'profile'])->name('profile');
    Route::get('/privacy',[FrontendController::class,'privacy'])->name('privacy');
    Route::get('/term-condition',[FrontendController::class,'term'])->name('term');
    Route::get('/return-policy',[FrontendController::class,'return'])->name('return');
    Route::resource('/product/review',ReviewController::class,['name'=>'review']);
});

Route::get('/home/product/show/{id}',[ProductShowController::class,'productShow'])->name('home.product.show');

Route::get('/dashboard',[BackendController::class,'dashboard'])->name('dashboard');

//Dashboard Category Controller--------------
Route::resource('/dashboard/category',CategoryController::class,['names' => 'dashboard.category']);
Route::post('/get/data',[CategoryController::class,'getData']);

//Subcategory Controller
Route::resource('/dashboard/sub-category',SubcategoryController::class,['names' => 'dashboard.subcategory']);

//Unit Controller 
Route::resource('/dashboard/unit',UnitController::class,['name'=> 'dashboard.unit']);

//Size Controller
Route::resource('/dashboard/size',SizeController::class,['name'=> 'dashboard.size']);

//Color Controller 
Route::resource('/dashboard/color',ColorController::class,['name'=>'dashboard.color']);

//Brand Controller
Route::resource('/dashboard/brand',BrandController::class,['name'=>'dashboard.brand']);

//Product Controller 
Route::resource('/dashboard/product',ProductController::class,['name'=>'dashboard.product']);



