<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

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
    public function feedback(User $user)
    {
        $feedbackMessages = $user->feedback; // This should be a collection of feedback items
        return view('menu.feedback', ['feedbackMessages' => $feedbackMessages]);
    }


}
