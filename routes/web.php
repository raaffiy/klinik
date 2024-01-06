<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/menu', function () {
    return view('/menu');
});

Route::get('/cart', function () {
    return view('/cart');
});

Route::get('/blog', function () {
    return view('/blog');
});

Route::get('/blog-single', function () {
    return view('/blog-single');
});

Route::get('/checkout', function () {
    return view('/checkout');
});

Route::get('/product-single', function () {
    return view('/product-single');
});

Route::get('/gallery', function () {
    return view('/gallery');
});

Route::get('/product-single/{id}', [ProductController::class, 'showProduct']);
Route::get('/blog-single/{id}', [BlogController::class,'showBlog']);
Route::get('/checkout/{id}', [BuyController::class,'showBuy']);
Route::get('/cart/{id}', [CartController::class,'addToCart']);
Route::patch('update-cart', [CartController::class,'update'])->name('update_cart');
Route::delete('remove-form-cart', [CartController::class, 'remove'])->name('remove_from_cart');