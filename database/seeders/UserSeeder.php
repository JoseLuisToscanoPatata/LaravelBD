<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => Str::random(10),
            'email' => Str::random(10) . '@gmail.com',
            'password' => Hash::make('password'),
            'address' => 'Calle lolaso',
            'mobile' => '678565656',
            'type' => 'rider',
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'paco',
            'email' => 'paco@gmail.com',
            'password' => Hash::make('password'),
            'address' => 'Calle paca',
            'mobile' => '644335588',
            'type' => 'customer',
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => 'manolo',
            'email' => 'manolo@gmail.com',
            'password' => Hash::make('password'),
            'address' => 'Calle algo',
            'mobile' => '633448899',
            'type' => 'rider',
        ]);

        DB::table('users')->insert([
            'id' => 4,
            'name' => Str::random(10),
            'email' => Str::random(10) . '@gmail.com',
            'password' => Hash::make('password'),
            'address' => 'Calle manolo',
            'mobile' => '678565656',
            'type' => 'customer',
        ]);

        DB::table('users')->insert([
            'id' => 5,
            'name' => 'fran',
            'email' => 'fran@gmail.com',
            'password' => Hash::make('password'),
            'address' => 'Calle flipa',
            'mobile' => '12341234',
            'type' => 'customer',
        ]);

        DB::table('users')->insert([
            'id' => 6,
            'name' => 'lola',
            'email' => 'lola@gmail.com',
            'password' => Hash::make('password'),
            'address' => 'Calle lola',
            'mobile' => '34563456',
            'type' => 'rider',
        ]);
    }
}
