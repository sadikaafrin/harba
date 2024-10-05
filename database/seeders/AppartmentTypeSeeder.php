<?php

namespace Database\Seeders;

use App\Models\AppartmentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppartmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed 4 appartmentType
        AppartmentType::factory()->count(4)->create();
    }
}
