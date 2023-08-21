<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercices extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'exercise_mistakes' => 'array',
        'exercise_muscles' => 'array',
        'exercise_benefits' => 'array',
    ];
}
