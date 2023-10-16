<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ServiceSeeder::class,
            ClientSeeder::class,
            OrderSeeder::class,
            AddressSeeder::class,
            PassengerSeeder::class,
            PaymentSeeder::class,
        ]);
    }
}
