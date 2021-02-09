<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            UserSeeder::class,
            BrandSeeder::class,
            VersionSeeder::class,
            CategorySeeder::class,
            VehicleSeeder::class,
            DriverSeeder::class,
            CustomerSeeder::class,
            RideSeeder::class,
        ]);
    }
}
