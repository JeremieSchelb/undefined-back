<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RescuerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'biography' => $this->faker->realText(),
            'birthday' => $this->faker->date(),
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName()
        ];
    }
}
