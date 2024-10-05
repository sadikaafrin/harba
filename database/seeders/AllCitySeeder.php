<?php

namespace Database\Seeders;

use App\Models\AllCity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AllCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed 5 categories
        AllCity::factory()->count(5)->create();
    }
}
