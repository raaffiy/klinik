<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // app/Http/Controllers/ProductController.php

    public function showProduct($id)
    {
        // Retrieve the product based on the provided ID
        $product = Coffee::find($id);
    
        // Check if the product exists
        if (!$product) {
            abort(404); // Display a 404 Not Found page if the product is not found
        }
    
        // Return the view with the product data
        return view('/product-single', ['product' => $product]);
    }

}
