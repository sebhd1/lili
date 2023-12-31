<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Passenger;
use Illuminate\Database\Seeder;

class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Passenger::factory(5)->create();
        Passenger::factory()->hasAttached(Order::factory(), relationship: 'orders')->create();
    }
}
