<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThighsWorkoutController extends Controller
{
    public function index()
    {
        return view('workouts.thighs');
    }
}
