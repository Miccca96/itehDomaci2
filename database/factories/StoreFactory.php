<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "store_category_id" => $this->faker->numberBetween(1, 5),
            "name" => $this->faker->word,
            "address" => $this->faker->streetAddress,
            "city" => $this->faker->city,
            'contact_name' => $this->faker->name(),
            'contact_email' => $this->faker->safeEmail()
        ];
    }
}
