<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function show()
    {
        $items = Items::all();
        return view('menu.shop', ['items' => $items]);
    }
    public function showCart()
    {
        return view('cart');
    }
    public function create()
    {
        return view('menu.createItem');
    }
    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer', // Assuming 'quantity' is part of your form
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max file size as needed
        ]);
        $attributes['image_path'] = request()->file('image_path')->store('itemsImages', 'public');
        Items::create($attributes);
        return redirect()->route('shop');
    }
}
