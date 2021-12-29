<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->word,
            "price" => $this->faker->randomFloat(2, 300, 3500),
            'description' => $this->faker->text(),
            "store_id" => $this->faker->numberBetween(1, 15)
        ];
    }
}
