<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function showProducts($id)
    {
        // Retrieve the product based on the provided ID
        $products = Products::find($id);
    
        // Check if the product exists
        if (!$products) {
            abort(404); // Display a 404 Not Found page if the product is not found
        }
    
        // Return the view with the product data
        return view('/product-details', ['products' => $products]);
    }
}
