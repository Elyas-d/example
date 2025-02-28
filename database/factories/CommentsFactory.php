<?php

namespace Database\Factories;

use App\Models\post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\comments>
 */
class CommentsFactory extends Factory
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
            'post_id'=>post::factory(),
            'comment'=>fake()->realText(),
            'likes'=>fake()->numberBetween(1,70),
            'replies'=>fake()->numberBetween(1,50),
            'dislikes'=>fake()->numberBetween(1,15)
        ];
    }
}
