<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CinemaMovie>
 */
class CinemaMovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cinema_id' => fake()->numberBetween($min = 1, $max = 5),
            'movie_id' => fake()->numberBetween($min = 1, $max = 20),
        ];
    }
}
