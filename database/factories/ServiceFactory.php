<?php

namespace Database\Factories;

use App\Enums\Frequency;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'frequency' => fake()->randomElement(Frequency::cases()),
            'name' => fake()->catchPhrase(),
            'description' => fake()->text(10),
            'fee' => fake()->numberBetween(1, 10),
            'additional_fee' => fake()->numberBetween(1,10),
        ];
    }
}
