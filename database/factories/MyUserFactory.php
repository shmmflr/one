<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'l_name' => $this->faker->name(),
            'f_name' => $this->faker->unique()->safeEmail(),
            'age' => $this->faker->numberBetween(12, 40),
        ];
    }
}
