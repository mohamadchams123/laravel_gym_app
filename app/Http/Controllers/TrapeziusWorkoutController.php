<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrapeziusWorkoutController extends Controller
{
    public function index()
    {
        return view('workouts.trapezius');
    }
}
