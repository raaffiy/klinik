<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Models\News;
use Illuminate\Http\Request;

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

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/search', [NewsController::class, 'search'])->name('news.search');
Route::get('/news/filter', [NewsController::class, 'filter'])->name('news.filter');
Route::get('/news-details/{id}', [NewsController::class, 'showNews'])->name('news.details');

Route::get('/medicine', function () {
    return view('product');
});
Route::get('/medicine/{id}', [ProductsController::class,'showProducts']);

Route::get('/chat', function () {
    return view('chat');
});