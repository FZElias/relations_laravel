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
        DB::table("photos")->insert([
            "name" => "Photo 1",
            "album_id" => 1
        ]);

        DB::table("photos")->insert([
            "name" => "Photo 2",
            "album_id" => 2
        ]);
    }
}
