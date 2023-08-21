<?php

// app/Models/Cart.php
namespace App\Models;
use App\Models\Items;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'item_id', 'quantity'];
    public static function getCartItems()
    {
        $user = auth()->user();
        if ($user) {
            return Cart::where('user_id', $user->id)->with('items')->get();
        }
        return collect();
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function items()
    {
        return $this->belongsTo(Items::class, 'item_id');
    }
}