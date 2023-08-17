<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsWorkoutController extends Controller
{
    public function index()
    {
        return view('workouts.abs');
    }
}
