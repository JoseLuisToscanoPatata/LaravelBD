<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'id' => 2,
            'request' => 7,
            'preferences' => 'no morir',
        ]);

        DB::table('customers')->insert([
            'id' => 4,
            'request' => 10,
            'preferences' => 'morir',
        ]);

        DB::table('customers')->insert([
            'id' => 5,
            'request' => 3,
            'preferences' => 'rapido',
        ]);
    }
}
