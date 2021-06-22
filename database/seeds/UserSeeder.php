<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            [
                'name' => 'อาตร์',
                'username' => 'nauthiz',
                'password' => Hash::make('191131'),
            ],
            [
                'name' => 'Admin',
                'username' => 'admin',
                'password' => Hash::make('123456'),
            ]
        ]);
    }
}
