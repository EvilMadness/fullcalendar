<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'start' => $this->faker->dateTimeBetween('2023-06-12 08:00:00', '2023-06-18 20:00:00'),
            'end' => $this->faker->dateTimeBetween('2023-06-12 08:00:00', '2023-06-18 20:00:00'),
        ];
    }
}
