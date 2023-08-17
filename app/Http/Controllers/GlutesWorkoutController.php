<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlutesWorkoutController extends Controller
{
    public function index()
    {
        return view('workouts.glutes');
    }
}
