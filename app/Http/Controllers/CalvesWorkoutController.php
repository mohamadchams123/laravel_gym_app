<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalvesWorkoutController extends Controller
{
    public function index()
    {
        return view('workouts.calves');
    }
}
