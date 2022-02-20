<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rate' => $this->faker->numberBetween(1, 5),
            'rateable_id' => $this->faker->numberBetween(1, 20),
            'rateable_type' => 'App\Models\post',
        ];
    }
}