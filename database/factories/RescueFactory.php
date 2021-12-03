<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RescueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'location' => $this->faker->city(),
            'report' => $this->faker->realText(),
            'date' => $this->faker->dateTime()
        ];
    }
}
