<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'imageable_type' => fake()->randomElement(['App\Models\Woman', 'App\Models\Man']),
            'imageable_id' => fake()->numberBetween($min = 1, $max = 10),
            'filename' => fake()->filePath()
        ];
    }
}
