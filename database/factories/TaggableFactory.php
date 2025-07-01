<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Taggable>
 */
class TaggableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tag_id' => fake()->numberBetween($min = 1, $max = 50),
            'taggable_type' => fake()->randomElement(['App\Models\Post', 'App\Models\Video']),
            'taggable_id' => fake()->numberBetween($min = 1, $max = 10),
        ];
    }
}
