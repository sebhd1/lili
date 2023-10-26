<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Order;
use App\Models\Passenger;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::factory(10)->create();
        Order::factory()->hasAttached(Passenger::factory(), relationship: 'passengers')->create();
        Order::factory()->hasAttached(Client::factory(), ['is_caller' => true], 'clients')->create();
    }
}
