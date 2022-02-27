<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Ybazli\Faker\Facades\Faker;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => Faker::word(),
            'content' => Faker::paragraph(),
            'created_by' => $this->faker->numberBetween(1, 20),
        ];
    }
}