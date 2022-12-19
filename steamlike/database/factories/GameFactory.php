<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'        => fake()->word(),
            'image'       => fake()->image('public/storage/images', 640, 480, null, false),
            'description' => fake()->sentence(30),
            'price'       => fake()->randomFloat(2,0,200),
            'date'        => fake()->date(),
        ];
    }
}
