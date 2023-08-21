<?php

namespace App\Http\Controllers;

use App\Models\Exercices;
use Illuminate\Http\Request;

class ExercicesController extends Controller
{
    public function index()
    {
        return view('menu.exercises');
    }
    public function create()
    {
        return view('menu.createWorkout');
    }
    public function store()
    {
        $image = request()->validate(['exercise_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048']);
        $image = request()->file('exercise_image')->store('workoutImages', 'public');
        Exercices::create([
            'category_name' => request()->input('category_name'),
            'exercise_name' => request()->input('exercise_name'),
            'exercise_info' => request()->input('exercise_info'),
            'exercise_howto' => request()->input('exercise_howto'),
            'exercise_sr' => request()->input('exercise_sr'),
            'exercise_mistakes' => request()->input('exercise_mistakes', []),
            'exercise_muscles' => request()->input('exercise_muscles', []),
            'exercise_benefits' => request()->input('exercise_benefits', []),
            'exercise_image' => $image,
        ]);
        return redirect()->route('exercices');
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
