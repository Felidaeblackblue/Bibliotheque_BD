<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->insert([
            [
            'name' => 'Moris',
            'year_of_birth' => 1923,
            'nationality' => 'Française',
            ],
            [
            'name' => 'Uderzo',
            'year_of_birth' => 1927,
            'nationality' => 'Française',
            ],
        ]);
    }
}
