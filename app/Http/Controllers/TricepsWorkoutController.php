<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TricepsWorkoutController extends Controller
{
    public function index()
    {
        return view('workouts.triceps-workouts');
    }
}
