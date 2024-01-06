<?php

namespace App\Http\Controllers;

use App\Models\Coffee; // Import the Coffee model
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($id)
    {
        // Get the product details from the database
        $product = Coffee::find($id);

        // Get the current cart from the session or create a new one
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'image_product' => $product->image_product,
                'name' => $product->name,
                'short_description' => $product->short_description,
                'price' => $product->price,
                'quantity' => 1,
                // Add other product details as needed
            ];
        }

        session()->put('cart', $cart);
        
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request){
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('Success', 'Cart Successfully updated!');
        }
    }

    public function remove (Request $request){
        if($request->id){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product Successfully Removed');
        }
    }
}
