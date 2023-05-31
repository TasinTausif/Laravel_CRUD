<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory {
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			'title'       => $this->faker->sentence(),
			'description' => '<p>' . implode( ' . </p><p>', $this->faker->paragraphs( 4 ) ) . '</p>',
		];
	}
}
