<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\College>
 */
class CollegeFactory extends Factory
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
            'profile_id' => Profile::factory(),
            'name' => fake()->company(),
            'ubication' => fake()->latitude().fake()->longitude(),
            'type' => fake()->randomElement(['Universidad','Primaria','Segundaria']),
        ];
    }
}
