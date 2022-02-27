<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Ybazli\Faker\Facades\Faker;

class MyUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'l_name' => Faker::firstName(),
            'f_name' => Faker::lastName(),
            'age' => $this->faker->numberBetween(12, 40),
            'email' => $this->faker->email(),
        ];
    }
}