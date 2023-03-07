<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agent>
 */
class AgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => fake()->name,
            'title' => fake()->title,
            'description' => fake()->text,
            'photo' => fake()->image(public_path('images'),fullPath: false),
            'twitter' => fake()->url,
            'facebook' => fake()->url,
            'linkedin' => fake()->url,
            'instagram' => fake()->url,
        ];
    }
}
