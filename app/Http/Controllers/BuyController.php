<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use Illuminate\Http\Request;

class BuyController extends Controller
{
     public function showBuy($id)
    {
        // Retrieve the product based on the provided ID
        $buy = Coffee::find($id);
    
        // Check if the product exists
        if (!$buy) {
            abort(404); // Display a 404 Not Found page if the product is not found
        }
    
        // Return the view with the product data
        return view('/checkout', ['buy' => $buy]);
    }
}
