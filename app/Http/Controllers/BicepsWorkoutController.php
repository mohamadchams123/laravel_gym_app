<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BicepsWorkoutController extends Controller
{
    public function index()
    {
        return view('workouts.biceps');
    }
}
