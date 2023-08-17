<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HamstringsWorkoutController extends Controller
{
    public function index()
    {
        return view('workouts.hamstrings');
    }
}
