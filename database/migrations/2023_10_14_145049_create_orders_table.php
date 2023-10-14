<?php

    use App\Enums\OrderStatus;
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
            $table->enum('status', OrderStatus::values());
            $table->decimal('price');
            $table->decimal('discount')->default(0);
            $table->boolean('is_client_a_passenger')->default(true);

            $table->foreignId('client_id')
                ->constrained('clients');

            $table->foreignId('service_id')
                ->constrained('services');

            $table->dateTime('starts_at');
            $table->dateTime('ends_at');
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
