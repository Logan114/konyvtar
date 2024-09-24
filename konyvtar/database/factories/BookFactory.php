<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author'  => fake('hu_HU')->name(),
            'title'  => fake('hu_HU')->realText(20),
            'pieces'  => fake()->numberBetween(1, 100),
        ];
    }
}
