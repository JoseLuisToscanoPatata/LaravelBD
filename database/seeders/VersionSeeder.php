<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('versions')->insert([
            'name' => 'A6',
            'description' => 'bonito',
            'brand_id' => 1,
        ]);

        DB::table('versions')->insert([
            'name' => 'C4',
            'description' => 'grande',
            'brand_id' => 2,
        ]);

        DB::table('versions')->insert([
            'name' => 'CARTUS',
            'description' => 'gordo',
            'brand_id' => 3,
        ]);

        DB::table('versions')->insert([
            'name' => 'FOCUS',
            'description' => 'nose',
            'brand_id' => 4,
        ]);

        DB::table('versions')->insert([
            'name' => 'YOKESE',
            'description' => 'caro',
            'brand_id' => 5,
        ]);
    }
}
