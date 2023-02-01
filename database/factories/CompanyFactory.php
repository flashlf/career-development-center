<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->company(),
            'field' => $this->faker->word(),
            'employee' => $this->faker->numberBetween('10','200'),
            'location' => $this->faker->streetAddress()
        ];
    }
}
