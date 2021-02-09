<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('brands')->insert(['name' => 'AUDI',]);
        DB::table('brands')->insert(['name' => 'CITROEN',]);
        DB::table('brands')->insert(['name' => 'RENAULT',]);
        DB::table('brands')->insert(['name' => 'FORD',]);
        DB::table('brands')->insert(['name' => 'MERCEDES',]);
    }
}
