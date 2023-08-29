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
        $items = Items::orderBy('created_at', 'desc')->get();
        return view('menu.shop', ['items' => $items]);
    }
    public function showCart()
    {
        if(auth()->user()?->can('admin'))
        {
            abort(Response::HTTP_FORBIDDEN);
        }
        $cartItems = Cart::getCartItems();
        return view('cart', compact('cartItems'));
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
            'quantity' => 'required|integer',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
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
        $requestedQuantity = request()->input('item-quantity');
        $existingCartItem = Cart::where('user_id', $user->id)->where('item_id', $item->id)->first();
        if ($existingCartItem) {
            $newCartQuantity = $existingCartItem->quantity + $requestedQuantity;
            $maxAvailableQuantity = min($item->quantity, $newCartQuantity);
            $existingCartItem->update([
                'quantity' => $maxAvailableQuantity,
            ]);
        }
        else {
            $maxAvailableQuantity = min($item->quantity, $requestedQuantity);
            Cart::create([
                'user_id' => $user->id,
                'item_id' => $item->id,
                'quantity' => $maxAvailableQuantity,
            ]);
        }
        return redirect()->back()->with('status', 'item-added');
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
    public function removeFromCart(Cart $item)
    {
        $user = auth()->user();
        if ($user->id === $item->user_id) {
            $item->delete();
        }
        return redirect()->route('cart');
    }
    public function checkout()
    {
        $cartItems = Cart::getCartItems();
        foreach ($cartItems as $cartItem) {
            $item = Items::find($cartItem['item_id']);
            if ($item) {
                $item->quantity = $item->quantity - $cartItem['quantity'];
                $item->save();                
                $cartItem->quantity = 0;
                $cartItem->save();
            }
        }        
        return redirect()->route('cart');
    }
}