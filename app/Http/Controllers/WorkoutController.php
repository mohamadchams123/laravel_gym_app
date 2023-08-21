<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workout;

class WorkoutController extends Controller
{
    public function index()
    {
        $workouts = Workout::all();
        return view('workouts.index', compact('workouts'));
    }

    public function create()
    {
        return view('workouts.create');
    }

    public function store(Request $request)
    {
        $workout = new Workout();
        $workout->category_name = $request->input('category_name');
        $workout->exercise_name = $request->input('exercise_name');
        $workout->exercise_info = $request->input('exercise_info');
        $workout->exercise_howto = $request->input('exercise_howto');
        $workout->exercise_sr = $request->input('exercise_sr');
        $workout->exercise_mistakes = $request->input('mistakes');
        $workout->save();

    }

    public function show($id)
    {
        $workout = Workout::find($id);
        $exerciseMistakes = $workout->exercise_mistakes;

        return view('workout.show', [
            'workout' => $workout,
            'exerciseMistakes' => $exerciseMistakes,
        ]);
    }

    public function edit(Workout $workout)
    {
        return view('workouts.edit', compact('workout'));
    }

    public function update(Request $request, Workout $workout)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            // Add more validation rules for other workout fields
        ]);

        $workout->update($validatedData);

        return redirect()->route('workouts.index')
                         ->with('success', 'Workout updated successfully');
    }

    public function destroy(Workout $workout)
    {
        $workout->delete();

        return redirect()->route('workouts.index')
                         ->with('success', 'Workout deleted successfully');
    }
    public function shoulderWorkouts(Request $request)
{
    $categoryName = $request->input('category_name');
    $exerciseName = $request->input('exercise_name');
    $exerciseInfo = $request->input('exercise_info');
    $exerciseHowTo = $request->input('exercise_howto');
    $exerciseSr = $request->input('exercise_sr');
    $mistakes = $request->input('mistakes', []);

    // Ensure $mistakes is an array
    if (!is_array($mistakes)) {
        $mistakes = [];
    }

    // Ensure all mistake arrays have both 'name' and 'description' keys
    foreach ($mistakes as &$mistake) {
        if (!is_array($mistake)) {
            $mistake = ['name' => '', 'description' => ''];
        } else {
            if (!isset($mistake['name'])) {
                $mistake['name'] = '';
            }
            if (!isset($mistake['description'])) {
                $mistake['description'] = '';
            }
        }
    }

    Workout::create([
        'category_name' => $categoryName,
        'exercise_name' => $exerciseName,
        'exercise_info' => $exerciseInfo,
        'exercise_howto' => $exerciseHowTo,
        'exercise_sr' => $exerciseSr,
        'exercise_mistakes' => $mistakes,
    ]);

    return view('workouts.shoulder');
}
}
