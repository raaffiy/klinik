<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
public function showEvent($id)
    {
        // Retrieve the product based on the provided ID
        $event = Event::find($id);
    
        // Check if the product exists
        if (!$event) {
            abort(404); // Display a 404 Not Found page if the product is not found
        }
    
        // Return the view with the product data
        return view('/event-details', ['event' => $event]);
    }
}
