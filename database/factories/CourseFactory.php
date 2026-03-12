<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'duration' => $this->faker->numberBetween(10, 60),
            'level' => $this->faker->randomElement(['Basic', 'Intermediate', 'Advanced'])
        ];
    }
}