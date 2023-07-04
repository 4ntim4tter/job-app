<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 **/
class JobsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->word(),
            'category' => fake()->word(),
            'description' => fake()->sentence(),
            'requirements' => fake()->paragraph(),
            'published' => random_int(0,1),
            'open' => random_int(0,1),
            'end_date' => fake()->dateTimeInInterval('-2 days', '+700 days'),
        ];
    }
}
