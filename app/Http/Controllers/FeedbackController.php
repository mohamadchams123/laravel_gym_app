<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\FeedbackController;
use Illuminate\Http\Request;
use App\Models\Feedback;
use Illuminate\Support\Facades\Redirect;


class FeedbackController extends Controller
{
    public function show()
    {
        $feedbacks = Feedback::all(); // Fetch the feedbacks from the database
        return view('menu.feedback', ['feedbacks' => $feedbacks]);
    }
    public function store()
    {
        request()->validate([
            'message'=>'required'
        ]);
        Feedback::create([
            'user_id'=>request()->user()->id,
            'message'=>request('message')
        ]);
        return Redirect::back();
    }
}