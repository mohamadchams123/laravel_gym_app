<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exercices', function (Blueprint $table) {
            $table->id();
            $table->string('category_name');
            $table->string('exercise_name');
            $table->text('exercise_info')->nullable();
            $table->text('exercise_howto')->nullable();
            $table->text('exercise_sr')->nullable();
            $table->json('exercise_mistakes')->nullable();
            $table->json('exercise_muscles')->nullable();
            $table->json('exercise_benefits')->nullable();
            $table->string('exercise_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercices');
    }
};
