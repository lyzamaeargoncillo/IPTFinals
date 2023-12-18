<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rental>
 */
class RentalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => rand(1, 50),
            'rental_date' => $this->faker->dateTimeThisYear,
            'return_date' => $this->faker->dateTimeThisYear,
            'rental_fee' => $this->faker->randomFloat(2,50,500),
        ];
    }
}
