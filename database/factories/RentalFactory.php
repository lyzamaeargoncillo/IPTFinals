<?php

namespace Database\Factories;

use App\Models\Customer;
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
            'customer_id' => fake()->randomElement(Customer::pluck('id')),
            'rental_date' => $this->faker->dateTimeThisYear,
            'return_date' => $this->faker->dateTimeThisYear,
            'rental_fee' => $this->faker->randomFloat(2,50,500),
        ];
    }
}
