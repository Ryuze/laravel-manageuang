<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AccountingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'description' => $this->faker->userName,
            'date' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
            'total' => $this->faker->numberBetween(10000, 5000000)
        ];
    }
}
