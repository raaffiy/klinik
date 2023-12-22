<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function processCheckout(Request $request)
    {
        Session::flash('success', 'Your purchase was successful!');

        // Redirect back to the checkout page or any other page you want
        return redirect()->route('/checkout');
    }
}
