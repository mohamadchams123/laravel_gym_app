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
    public function store(Request $request)
    {
        $exercice = new Exercices();
        $exercice->category_name = $request->input('category_name');
        $exercice->exercise_name = $request->input('exercise_name');
        $exercice->exercise_info = $request->input('exercise_info');
        $exercice->exercise_howto = $request->input('exercise_howto');
        $exercice->exercise_sr = $request->input('exercise_sr');
        $exercice->exercise_mistakes = $request->input('exercise_mistakes');
        $exercice->exercise_muscles = $request->input('exercise_muscles');
        $exercice->exercise_benefits = $request->input('exercise_benefits');
        $exercice->exercise_image = $request->input('exercise_image');
        $exercice->exercise_image = $request->file('exercise_image')->store('exercicesImages', 'public');
        $exercice->save();
        return redirect()->route('exercices');
    }
    public function show($category)
    {
        $exercices = Exercices::where('category_name', $category)->get();
        return view('workouts.'.$category, ['exercices' => $exercices]);
    }
    public function destroy(Exercices $exercices)
    {
        $exercices->delete();
        return redirect()->route('exercices');
    }
}
