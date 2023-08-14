<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('menu.feedback');
    }
    
}
