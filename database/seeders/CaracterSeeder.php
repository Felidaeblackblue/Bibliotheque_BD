<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaracterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('caracters')->insert([
            [
            'name' => 'Lucky Luke',
            'year' => 1946,
            'comic_name' => 'L\'homme qui tire plus vite que son ombre',
            'artist_id' => 1,
            ],
            [
            'name' => 'Astérix',
            'year' => 1959,
            'comic_name' => 'Une aventure d\'Astérix le Gaulois',
            'artist_id' => 2,
            ],
        ]);
    }
}
