<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KecamatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // insert data
        DB::table('kecamatan')->insert([
            [
                'id' => '1',
                'nama' => 'Syiah Kuala'
            ],
            [
                'id' => '2',
                'nama' => 'Ulee Kareng'
            ],
            [
                'id' => '3',
                'nama' => 'Lueng Bata'
            ],
            [
                'id' => '4',
                'nama' => 'Kuta Alam'
            ],
            [
                'id' => '5',
                'nama' => 'Baiturrahman'
            ],
            [
                'id' => '6',
                'nama' => 'Banda Raya'
            ],
            [
                'id' => '7',
                'nama' => 'Meuraxa'
            ],
            [
                'id' => '8',
                'nama' => 'Kuta Raja'
            ],
            [
                'id' => '9',
                'nama' => 'Jaya Baru'
            ],
        ]);
    }
}
