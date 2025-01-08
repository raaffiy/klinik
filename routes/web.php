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
    return view('welcome');
});
Route::get('news', function () {
    return view('news');
});
Route::get('/news-details', function () {
    return view('news-details');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/product-details', function () {
    return view('product-details');
});
Route::get('/chat', function () {
    return view('chat');
});