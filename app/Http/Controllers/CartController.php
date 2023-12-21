<?php

// CartController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request, $productId)
    {
        // Get the product details from the database
        $product = $productId::find($productId);

        // Get the current cart from the session or create a new one
        $cart = $request->session()->get('cart', []);

        // Add the product to the cart
        $cart[$productId] = [
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            // Add other product details as needed
        ];

        // Save the updated cart to the session
        $request->session()->put('cart', $cart);

        // Redirect back to the menu page or wherever you want
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function showCart(Request $request)
    {
        // Get the current cart from the session
        $cart = $request->session()->get('cart', []);

        return view('cart', compact('cart'));
    }
}
