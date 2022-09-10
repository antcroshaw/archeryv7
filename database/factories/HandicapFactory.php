<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Handicap>
 */
class HandicapFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
            return [
                'handicap' => $this->faker->numberBetween(1,100),
                'round_id' => $this->faker->numberBetween(1,9)
            
        ];
    }
}
