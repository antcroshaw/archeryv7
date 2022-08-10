<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Score>
 */
class ScoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'round_id' => $this->faker->numberBetween(1,9),
            'archer_id' => $this->faker->numberBetween(1,2),
            'location' => $this->faker->randomElement(['Indoor','Outdoor']),
            'score' => $this->faker->numberBetween(1,100)
        ];
    }
}
