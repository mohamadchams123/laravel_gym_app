<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoulderController extends Controller
{
    public function index()
    {
        // Your logic for the shoulder workouts page
        return view('workouts.shoulder-workouts');
    }
}
