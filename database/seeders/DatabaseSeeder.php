<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(All_citiesSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(Apartment_typesSeeder::class);

       }
}
