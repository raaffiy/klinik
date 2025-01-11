<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    
    public function showNews($id)
    {
        // Retrieve the product based on the provided ID
        $news = News::find($id);
    
        // Check if the product exists
        if (!$news) {
            abort(404); // Display a 404 Not Found page if the product is not found
        }
    
        // Return the view with the product data
        return view('/news-details', ['news' => $news]);
    }
    
}
