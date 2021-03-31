<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\frontend\All_ProductsController;
use App\Http\Controllers\UserController;

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


Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class,'about'])->name('about');
Route::get('/shop', [All_ProductsController::class,'sidebar_products'])->name('shop');
Route::get('/shop-detail', [All_ProductsController::class,'product_details'])->name('shop-detail');
Route::get('/cart', [All_ProductsController::class,'carts'])->name('cart');
Route::get('/checkout', [All_ProductsController::class,'checkout'])->name('checkout');
Route::get('/account', [All_ProductsController::class,'account_details'])->name('account');
Route::get('/wishlist', [All_ProductsController::class,'wishlist'])->name('wishlist');

Route::get('/gallery', [PagesController::class,'gallery'])->name('gallery');
Route::get('/contact', [PagesController::class,'contact'])->name('contact');

Route::get('/login', function (){
    return view('/login');
});
Route::get('/logout', function (){
    Session::forget('user');
    return redirect('login');
});

Route::view('/register', 'register');
Route::post('/login',[UserController::class, 'login']);
Route::post('/register',[UserController::class, 'register']);

