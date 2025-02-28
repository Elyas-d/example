<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>User::factory(),
            'post'=>fake()->realText(),
            'likes'=>fake()->numberBetween(100,700),
            'comments'=>fake()->numberBetween(10,300),
            'dislikes'=>fake()->numberBetween(10,50)
        ];
    }
}
