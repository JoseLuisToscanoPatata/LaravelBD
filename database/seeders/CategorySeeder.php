<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'coche',
            'minumum' => 3.5,
            'per_minute' => 1.3,
        ]);

        DB::table('categories')->insert([
            'name' => 'avion',
            'minumum' => 7.2,
            'per_minute' => 11.3,
        ]);

        DB::table('categories')->insert([
            'name' => 'tanque',
            'minumum' => 127.1,
            'per_minute' => 45.8,
        ]);

        DB::table('categories')->insert([
            'name' => 'barco',
            'minumum' => 19.4,
            'per_minute' => 0.3,
        ]);

        DB::table('categories')->insert([
            'name' => 'carrito',
            'minumum' => 8.8,
            'per_minute' => 10.7,
        ]);
    }
}
