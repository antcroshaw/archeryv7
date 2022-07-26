<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
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
    }
}
