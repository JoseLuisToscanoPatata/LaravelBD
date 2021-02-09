<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rides')->insert([

            'driver_id' => 1,
            'customer_id' => 2,
            'vehicle_id' => 1,
            'fee' => 5.0,
            'canceled' => 0,
            'date' => date("Y-m-d"),
        ]);

        DB::table('rides')->insert([

            'driver_id' => 3,
            'customer_id' => 4,
            'vehicle_id' => 2,
            'fee' => 4.2,
            'canceled' => 0,
            'date' => date("Y-m-d"),
        ]);

        DB::table('rides')->insert([

            'driver_id' => 6,
            'customer_id' => 5,
            'vehicle_id' => 3,
            'fee' => 8.0,
            'canceled' => 1,
            'date' => date("Y-m-d"),
        ]);
    }
}
