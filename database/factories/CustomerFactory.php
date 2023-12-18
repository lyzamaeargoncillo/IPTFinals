<?php

namespace Database\Factories;
use App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    protected $model = Customer::class;
    
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'username' => $this->faker->word,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
