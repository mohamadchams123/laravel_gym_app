<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Feedback;
use App\Models\Items;
use App\Models\Cart;




class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'email', 'password', 'subscription','subscription_start_date', 'subscription_end_date',
    ];
    

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'subscription_start_date' => 'datetime',
        'subscription_end_date' => 'datetime',
        'password' => 'hashed',
    ];
    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }
    public function userCards()
    {
        return $this->hasMany(UserCard::class);
    }
    public function cart()
    {
        return $this->hasOne(Cart::class);
    }
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search){
            $query->where(fn($query)=>
                $query->where('name','like','%'.$search.'%')
                ->orWhere('email','like','%'.$search.'%'));
        });
    }
}
