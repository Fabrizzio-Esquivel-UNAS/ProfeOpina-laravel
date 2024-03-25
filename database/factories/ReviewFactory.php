<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'profile_id' => Profile::factory()->hasTeacher()->create(),
            'comment_id' => Comment::factory(),
            'score' => fake()->randomElement(['Positivo','Mixto','Negativo']),
            'votes' => fake()->numberBetween(0, 10000),
        ];
    }
}
