<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
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
Route::get('/shop',[FrontendController::class,'shop'])->name('shop');
Route::get('/about-us',[FrontendController::class,'about'])->name('about');
Route::get('/cart',[FrontendController::class,'cart'])->name('cart');
Route::get('/checkout',[FrontendController::class,'checkout'])->name('checkout');
Route::get('/contact',[FrontendController::class,'contact'])->name('contact');



Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'register'])->name('register');
