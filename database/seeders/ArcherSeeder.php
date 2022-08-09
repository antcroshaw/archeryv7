<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArcherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('archers')->insert([
            'name' => 'Anthony Croshaw',
                'DOB' => '1973-03-07',
                'sex' => 'male'
        ]);

        DB::table('archers')->insert([
            'name' => 'Mike Croshaw',
                'DOB' => '1973-03-07',
                'sex' => 'male'
        ]);
    }
}
