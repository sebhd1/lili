<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Order;
use App\Models\Passenger;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory(10)->create();
        Client::factory()->hasAttached(Order::factory(), relationship: 'orders')->create();
    }
}
