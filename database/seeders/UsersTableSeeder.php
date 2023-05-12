<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'id' => '1', // tambahkan baris ini
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => '1',
        ]);

        DB::table('users')->insert([
            'id' => '2', // tambahkan baris ini
            'name' => 'Driver',
            'email' => 'driver@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => '2',
        ]);

        DB::table('users')->insert([
            'id' => '3', // tambahkan baris ini
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => '0',
        ]);
    }
}

