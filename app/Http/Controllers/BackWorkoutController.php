<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackWorkoutController extends Controller
{
    public function index()
    {
        return view('workouts.back');
    }
}
