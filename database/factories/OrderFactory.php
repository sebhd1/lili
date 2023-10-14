<?php

namespace Database\Factories;

use App\Enums\OrderStatus;
use App\Models\Client;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => fake()->randomElement(OrderStatus::cases()),
            'price' => fake()->numberBetween(1,10),
            'discount' => fake()->numberBetween(1,10),
            'is_client_a_passenger' => fake()->boolean(),
            'client_id' => Client::factory(),
            'service_id' => Service::factory(),
            'starts_at' => fake()->dateTimeBetween('now', '1 week'),
            'ends_at' => fake()->dateTimeBetween('1 week 1 day', '2 weeks'),
        ];
    }
}
