<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Service_typesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

    DB::table("service_types")->insert(
        [['name'=>'Per day'],
        ['name'=>'Per night'],
        ['name'=>'Per month'],
        ['name'=>'D '],
        ['name'=>'E']]
    );
}}
