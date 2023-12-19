<?php

namespace Database\Factories;

use App\Models\Rental;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rental_id' => fake()->randomElement(Rental::pluck('id')),
            'brand' => $this->faker->word,
            'model' => $this->faker->word,
            'year' => $this->faker->year,
            'rental_fee' => $this->faker->randomFloat(2,50,500),
        ];
    }
}
