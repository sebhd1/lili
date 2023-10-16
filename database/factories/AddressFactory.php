<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Passenger;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $addressable = fake()->randomElement([
            Client::class,
            Passenger::class,
        ]);

        return [
            'line1' => fake()->address(),
            'line2' => fake()->address(),
            'house_number' => fake()->streetAddress(),
            'city' => fake()->city(),
            'province' => fake()->stateAbbr(),
            'zip_code' => fake()->numerify('#####'),
            'addressable_type' => $addressable,
            'addressable_id' => $addressable::factory(),
        ];
    }
}
