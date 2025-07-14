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
    }
}