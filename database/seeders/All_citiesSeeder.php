<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class All_citiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("all_cities")->insert(
            [['name'=>'NewYork'],
            ['name'=>'NewYork'],
            ['name'=>'Los Angeles'],
            ['name'=>'Washington DC'],
            ['name'=>'Houston']]
        );
    }
}
