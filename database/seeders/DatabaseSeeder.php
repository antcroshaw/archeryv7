<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Round;
use App\Models\Score;
use App\Models\User;
use App\Models\Archer;
use App\Models\Handicap;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        Category::factory()->create([
            'name' => 'Outdoor GNAS'
        ]);
        Category::factory()->create([
            'name' => 'Indoor GNAS'
        ]);

        User::factory()->create([
            'name' => 'Anthony Croshaw',
            'email' => 'anthony.croshaw@gmail.com',
            'password' => Hash::make('Lanzarote2012')
        ]);



        Round::factory(9)->create();

        $this->call([
            ArcherSeeder::class
        ]);

        Score::factory(20)->hasArcher(4)->create();

        $rounds = Round::all();
        foreach($rounds as $round) {
            $max_handicap = 105;
            for ($handicap=1; $handicap < $max_handicap; $handicap++) { 
                Handicap::factory()->hasRound(9)->create(['handicap' => $handicap, 'round_id' => $round->id]);
            }
        }
        // Handicap::factory(50)->hasRound(9)->create();
       
    }
}
