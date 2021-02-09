<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivers')->insert([
            'id' => 1,
            'photo_path' => 'no existe',
            'hire_date' => date('Y-m-d'),
            'total_rides' => 12,
            'bank_acount' => 'una cuenta',
            'rating' => 'bueno',
        ]);

        DB::table('drivers')->insert([
            'id' => 3,
            'photo_path' => 'tampoco existe',
            'hire_date' => date('Y-m-d'),
            'total_rides' => 31,
            'bank_acount' => 'otr cuenta',
            'rating' => 'malo',
        ]);

        DB::table('drivers')->insert([
            'id' => 6,
            'photo_path' => 'si existe',
            'hire_date' => date('Y-m-d'),
            'total_rides' => 4,
            'bank_acount' => 'no la se',
            'rating' => 'fantastico',
        ]);
    }
}
