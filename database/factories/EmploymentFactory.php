<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EmploymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employment' => $this->faker->realText($maxNbChars = 200),
            'state' => $this->faker->realText($maxNbChars = 200),
            'company' => $this->faker->realText($maxNbChars = 200),
        ];
    }
}
