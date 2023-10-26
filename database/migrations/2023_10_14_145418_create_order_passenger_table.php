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
        Schema::create('order_passenger', function (Blueprint $table) {
            $table->id();
            $table->boolean('to_pickup')->default(true);
            $table->boolean('is_caller')->default(false);

            $table->foreignId('order_id')
                ->constrained('orders');

            $table->morphs('passenger');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_passenger');
    }
};
