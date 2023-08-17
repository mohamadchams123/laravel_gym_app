<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChestController extends Controller
{
    public function index()
    {
        // Your logic for the chest workouts page
        return view('workouts.chest-workouts');
    }
}
