<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            ['src' => 'test.jpeg', 'album_id' => 1],
            ['src' => 'test.jpeg', 'album_id' => 2],
        ]);
    }
}
