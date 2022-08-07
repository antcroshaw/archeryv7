<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Round>
 */
class RoundFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()
            ->randomElement(['American', 'York','Western','Western II','Western III','Western IV','Western V','Bray','Bristol']),
            'location' => $this->faker->randomElement(['Indoor','Outdoor']),
            'category_id' => $this->faker->numberBetween(1,2)
        ];
    }
}
