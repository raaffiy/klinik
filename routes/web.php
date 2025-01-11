<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductsController;
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
Route::get('/product', function () {
    return view('product');
});
Route::get('/chat', function () {
    return view('chat');
});


Route::get('/news-details/{id}', [NewsController::class,'showNews']);
Route::get('/product-details/{id}', [ProductsController::class,'showProducts']);