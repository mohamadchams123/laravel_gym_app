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

        return response()->json(['message' => 'Workout created successfully']);
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
}
