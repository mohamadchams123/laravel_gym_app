<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCard extends Model
{
    protected $fillable = [
        'user_id',
        'card_number',
        'expiry_date',
        'cvv',
        'cardholder_name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
