<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("albums")->insert([
            "name" => "Album 1"
        ]);
        DB::table("albums")->insert([
            "name" => "Album 2"
        ]);
        DB::table("albums")->insert([
            "name" => "Album 3"
        ]);
        DB::table("albums")->insert([
            "name" => "Album 4"
        ]);
        DB::table("albums")->insert([
            "name" => "Album 5"
        ]);
        DB::table("albums")->insert([
            "name" => "Album 6"
        ]);

    }
}
