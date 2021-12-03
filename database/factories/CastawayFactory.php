<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CastawayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'address' => $this->faker->address(),
            'alive' => $this->faker->boolean()
        ];
    }
}
