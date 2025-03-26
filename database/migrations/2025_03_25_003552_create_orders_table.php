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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('phone');
            $table->string('start_place');
            $table->string('end_place');
            $table->string('stop_points');
            $table->integer('num_seats');
            $table->string('pickup_time');
            $table->boolean('round_trip');
            $table->boolean('long_trip');
            $table->boolean('vat');
            $table->integer('waittime')->default(0);
            $table->integer('price');
            $table->integer('distance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
