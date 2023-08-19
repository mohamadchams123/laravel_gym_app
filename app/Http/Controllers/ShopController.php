<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;
use App\Models\Cart;
use Symfony\Component\HttpFoundation\Response;

class ShopController extends Controller
{
    public function show()
    {
        $items = Items::all();
        return view('menu.shop', ['items' => $items]);
    }
    public function showCart()
    {
        if(auth()->user()?->can('admin'))
        {
            abort(Response::HTTP_FORBIDDEN);
        }
        return view('cart');
    }
    public function create()
    {
        return view('menu.createItem');
    }
    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer', // Assuming 'quantity' is part of your form
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max file size as needed
        ]);
        $attributes['image_path'] = request()->file('image_path')->store('itemsImages', 'public');
        Items::create($attributes);
        return redirect()->route('shop');
    }
    public function showItemDetail(Items $item)
    {
        return view('item-detail', compact('item'));
    }
    public function addToCart(Items $item)
    {
        $user = auth()->user();
        $existingCartItem = Cart::where('user_id', $user->id)->where('item_id', $item->id)->first();
        if ($existingCartItem) {
            $existingCartItem->update([
                'quantity' => $existingCartItem->quantity + request()->input('item-quantity'),
            ]);
        }
        else {
            Cart::create([
                'user_id' => $user->id,
                'item_id' => $item->id,
                'quantity' => request()->input('item-quantity'),
            ]);
        }
        return redirect()->back();
    }
    public function update(Request $request, Items $item)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);
        $item->update($validatedData);
        return redirect()->back();
    }
    public function destroy(Items $item)
    {
        $item->delete();
        return redirect()->route('shop');
    }
}