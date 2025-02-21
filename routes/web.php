<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ChatBotController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

// news 
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/search', [NewsController::class, 'search'])->name('news.search');
Route::get('/news/filter', [NewsController::class, 'filter'])->name('news.filter');
Route::get('/news-details/{id}', [NewsController::class, 'showNews'])->name('news.details');

// medicine (obat-obatan)
Route::get('/medicine/{id}', [ProductsController::class,'showProducts']);
Route::get('/medicine', function () {
    return view('product');
});

// chat bot (ai)
Route::get('/chat', function () {
    return view('chat');
});

Route::post('/chat/send', function (Request $request) {
    $message = $request->input('message');
    
    // Filter topik kesehatan
    $keywords = ['kesehatan', 'obat', 'penyakit', 'dokter', 'medis', 'rumah sakit', 'vaksin', 'gejala', 'terapi', 'gizi', 'diet', 'kebugaran'];
    $isHealthRelated = false;
    
    foreach ($keywords as $keyword) {
        if (stripos($message, $keyword) !== false) {
            $isHealthRelated = true;
            break;
        }
    }
    
    if (!$isHealthRelated) {
        return response()->json([
            'choices' => [
                ['message' => ['content' => 'Maaf, saya hanya dapat menjawab pertanyaan seputar kesehatan.']]
            ]
        ]);
    }
    
    $response = Http::withHeaders([
        'Authorization' => 'Bearer ' . env('GROQ_API_KEY'),
    ])->post('https://api.groq.com/openai/v1/chat/completions', [
        'messages' => [
            [
                'role' => 'user',
                'content' => $message,
            ],
        ],
        'model' => 'llama-3.3-70b-versatile',
    ]);
    
    return response()->json($response->json());
});

// about (history pmr smkn 2 kota bekasi)
Route::get('/about', function(){
    return view('about');
});

// event (details)
Route::get('/event/{id}', [EventController::class,'showEvent']);

// achievements (details)
Route::get('/achievement/{id}', [AchievementController::class,'showAchievement']);