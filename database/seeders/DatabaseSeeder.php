<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $hash=Hash::make('12345678');
        DB::table('users')->insert([

            ['f_name' => "admin",'email'=>'admin@gmail.com','role'=>'admin','password'=>''.$hash.''],

        ]);

        DB::table('priority_statuses')->insert([

            ['status' => "on"],

        ]);
    }
}
