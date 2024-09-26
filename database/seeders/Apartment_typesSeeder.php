<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Apartment_typesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("appartment_types")->insert(
            [['name'=>'A'],
            ['name'=>'B'],
            ['name'=>'C'],
            ['name'=>'D'],
            ['name'=>'E']]
        );
    }
}
