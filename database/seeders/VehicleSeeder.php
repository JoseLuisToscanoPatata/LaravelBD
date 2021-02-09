<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
            'version_id' => '1',
            'category_id' => '1',
            'plate' => '1234FFC',
            'color' => 'blue',
            'seats' => 6,
        ]);

        DB::table('vehicles')->insert([
            'version_id' => '2',
            'category_id' => '2',
            'plate' => '3421LLM',
            'color' => 'green',
            'seats' => 12,
        ]);

        DB::table('vehicles')->insert([
            'version_id' => '3',
            'category_id' => '3',
            'plate' => '4871TDC',
            'color' => 'yellow',
            'seats' => 1,
        ]);

        DB::table('vehicles')->insert([
            'version_id' => '4',
            'category_id' => '4',
            'plate' => '9877TTR',
            'color' => 'black',
            'seats' => 4,
        ]);

        DB::table('vehicles')->insert([
            'version_id' => '5',
            'category_id' => '5',
            'plate' => '8556CTP',
            'color' => 'white',
            'seats' => 20,
        ]);
    }
}
