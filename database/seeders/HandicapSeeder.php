<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HandicapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Handicap::factory()->create([
            'name' => 'York',
            'location' => 'Outdoor',
            'category_id' => 1
        ]);

        Handicap::factory()->create([
            'name' => 'Western',
            'location' => 'Outdoor',
            'category_id' => 1
        ]);
        Handicap::factory()->create([
            'name' => 'American',
            'location' => 'Indoor',
            'category_id' => 2
        ]);
        Handicap::factory()->create([
            'name' => 'Junior York',
            'location' => 'Indoor',
            'category_id' => 2
        ]);
    }
}
