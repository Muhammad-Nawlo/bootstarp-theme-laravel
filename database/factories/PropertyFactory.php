<?php

namespace Database\Factories;

use App\Models\Agent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'agent_id' => self::factoryForModel(Agent::class),
            'price' => fake()->randomFloat(1, 100),
            'address' => fake()->address,
            'country' => fake()->country,
            'beds' => fake()->text,
            'baths' => fake()->text,
            'description' => fake()->text,
            'is_popular' => fake()->boolean,
            'is_featured' => fake()->boolean,
        ];
    }
}
