<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BoatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'type' => $this->faker->text(),
            'constructor' => $this->faker->company(),
            'width' => $this->faker->numberBetween(5, 30),
            'length' => $this->faker->numberBetween(10, 80),
            'weight' => $this->faker->numberBetween(15, 60),
            'draugth' => $this->faker->numberBetween(2, 60),
            'commisionning' => $this->faker->date(),
            'withdraw' => $this->faker->date(),
            'description' => $this->faker->realText()
        ];
    }
}
