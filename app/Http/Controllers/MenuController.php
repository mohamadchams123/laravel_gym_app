<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Feedback;

class MenuController extends Controller
{
    public function exercices()
    {
        return view('menu.exercices');
    }
    public function shop()
    {
        return view('menu.shop');
    }
    public function subscription()
    {
        return view('menu.subscription');
    }
    public function feedback()
    {
        $feedbacks = Feedback::all(); // Fetch the feedbacks from the database
        return view('menu.feedback', ['feedbacks' => $feedbacks]);
    }


}
