<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255'
        ]);

        // Here you would normally save to database
        // For now, we'll just redirect back with success message
        
        return redirect()->back()->with('success', 'Thank you for subscribing to our newsletter!');
    }
}
