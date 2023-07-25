<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portfolio>
 */
class PortfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name_project" => fake() -> word(),
            // "main_programming_language" => fake() -> randomElement(['Java', 'Php', 'JavaScript', 'C', 'C++']),
            "description" => fake() -> paragraph(),
            "complexity" => fake() -> randomElement(['Easy', 'Medium', 'Hard'])
        ];
    }
}
