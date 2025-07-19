<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seasons')->truncate();

        DB::table('seasons')->insert([
            ['id' => 1, 'name' => '春'],
            ['id' => 2, 'name' => '夏'],
            ['id' => 3, 'name' => '秋'],
            ['id' => 4, 'name' => '冬'],
        ]);

        DB::table('product_season')->truncate();

        DB::table('product_season')->insert([
            ['product_id' => '1','season_id' => '3'],
            ['product_id' => '1','season_id' => '4'],
            ['product_id' => '2','season_id' => '1'],
            ['product_id' => '3','season_id' => '4'],
            ['product_id' => '4','season_id' => '2'],
            ['product_id' => '5','season_id' => '2'],
            ['product_id' => '6','season_id' => '2'],
            ['product_id' => '6','season_id' => '3'],
            ['product_id' => '7','season_id' => '1'],
            ['product_id' => '7','season_id' => '2'],
            ['product_id' => '8','season_id' => '3'],
            ['product_id' => '8','season_id' => '4'],
            ['product_id' => '9','season_id' => '2'],
            ['product_id' => '10','season_id' => '1'],
            ['product_id' => '10','season_id' => '2'],
        ]);


    }
}