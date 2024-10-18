<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CitySeeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\StateSeeder;
use Database\Seeders\CountrySeeder;
use Database\Seeders\VillageSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $this->call([
            
            AdminSeeder::class,
            CountrySeeder::class,
            StateSeeder::class,
            CitySeeder::class,
            VillageSeeder::class,
        ]);
        
        
    }
}
