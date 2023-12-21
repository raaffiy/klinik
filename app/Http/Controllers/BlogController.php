<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showBlog($id)
    {
        // Retrieve the product based on the provided ID
        $blog = Coffee::find($id);
    
        // Check if the product exists
        if (!$blog) {
            abort(404); // Display a 404 Not Found page if the product is not found
        }
    
        // Return the view with the product data
        return view('/blog-single', ['blog' => $blog]);
    }
}
