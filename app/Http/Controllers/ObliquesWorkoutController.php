<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObliquesWorkoutController extends Controller
{
    public function index()
    {
        return view('workouts.obliques');
    }
}
