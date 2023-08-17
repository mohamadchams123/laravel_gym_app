<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuadsWorkoutController extends Controller
{
    public function index()
    {
        return view('workouts.quads');
    }
}
