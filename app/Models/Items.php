<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Cart;

class Items extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'quantity', 'image_path'];
    public function cart()
{
    return $this->belongsTo(Cart::class);
}
public function user()
{
    return $this->belongsTo(User::class);
}
}
