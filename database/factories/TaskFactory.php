<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
	/**
	 * Define the model's default state.
     *
	 * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
			// 'title' =>fake()->sentence(), both are same
			'description' => $this->faker->paragraph(2, true),
			'long_description' => $this->faker->paragraph(7, true),
			'completed' => fake()->boolean(),
        ];
    }
}
