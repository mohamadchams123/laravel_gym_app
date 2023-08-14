<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FeedbackController;
use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $feedback = new Feedback();
        $feedback->message = $request->input('message');
        $feedback->save();

        return redirect()->route('feedback')->with('success', 'Feedback submitted successfully.');
    }
}
