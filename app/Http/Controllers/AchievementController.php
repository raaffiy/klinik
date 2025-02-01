<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
public function showAchievement($id)
    {
        // Retrieve the product based on the provided ID
        $achievement = Achievement::find($id);
    
        // Check if the product exists
        if (!$achievement) {
            abort(404); // Display a 404 Not Found page if the product is not found
        }
    
        // Return the view with the product data
        return view('/achievement-details', ['achievement' => $achievement]);
    }
}
