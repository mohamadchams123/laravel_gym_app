<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_cards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('card_number');
            $table->string('expiry_date');
            $table->string('cvv');
            $table->string('cardholder_name');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Set the auto-increment value to the highest existing id + 1
        $maxId = DB::table('user_cards')->max('id');
        DB::statement("ALTER TABLE user_cards AUTO_INCREMENT = " . ($maxId + 1));
    }

    public function down()
    {
        Schema::dropIfExists('user_cards');
    }
};

