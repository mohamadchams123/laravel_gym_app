<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'id' => 2,
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password'=>bcrypt('password')
        ]);

        \App\Models\User::factory()->create([
            'id' => 1,
            'name' => 'Gym Admin',
            'email' => 'admin@gym.com',
            'password'=>bcrypt('admin')
        ]);
        \App\Models\Exercices::create([
            'category_name' => 'shoulders',
            'exercise_name' => '',
            'exercise_info' => '',
            'exercise_howto' => '',
            'exercise_sr' => '',
            'exercise_mistakes' => [''],
            'exercise_muscles' => [''],
            'exercise_benefits' => [''],
            'exercise_image' => '',
        ]);
    }
}
