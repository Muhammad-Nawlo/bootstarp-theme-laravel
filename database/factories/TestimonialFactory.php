<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
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
            'photo' =>fake()->image(public_path('images'),fullPath: false),
            'company' => fake()->company,
            'rating' => fake()->numberBetween(0, 5),
            'testimonial' => fake()->text,
        ];
    }
}
