<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NewBooks>
 */
class NewBooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker()->sentence(3),
            'author' => $this->fake()->name,
            'year' => $this->fake()->year,
            'genre' => $this->fake()->randomElement([
                'Classic', 'Dystopian', 'Romance', 'Fantasy', 'Adventure', 'Historical'
            ]),
        ];
    }
}
