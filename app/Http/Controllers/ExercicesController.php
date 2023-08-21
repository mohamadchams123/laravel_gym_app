<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicesController extends Controller
{
    public function index()
    {
        return view('menu.exercises');
    }
    public function abs()
    {
        return view('workouts.abs');
    }
    public function back()
    {
        return view('workouts.back');
    }
    public function biceps()
    {
        return view('workouts.biceps');
    }
    public function calves()
    {
        return view('workouts.calves');
    }
    public function chest()
    {
        return view('workouts.chest');
    }
    public function glutes()
    {
        return view('workouts.glutes');
    }
    public function hamstrings()
    {
        return view('workouts.hamstrings');
    }
    public function obliques()
    {
        return view('workouts.obliques');
    }
    public function quads()
    {
        return view('workouts.quads');
    }
    public function shoulder()
    {
        return view('workouts.shoulder');
    }
    public function thighs()
    {
        return view('workouts.thighs');
    }
    public function trapez()
    {
        return view('workouts.trapezius');
    }
    public function triceps()
    {
        return view('workouts.triceps');
    }
}
