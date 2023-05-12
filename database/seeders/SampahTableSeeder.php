<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SampahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // insert data ke tabel sampah
        DB::table('sampah')->insert([
            [
                'nama' => 'Sampah Organik',
                'harga' => '3',
            ],
            [
                'nama' => 'Botol Plastik',
                'harga' => '5',
            ],
            [
                'nama' => 'Botol Kaca',
                'harga' => '5',
            ],
            [
                'nama' => 'Kantong Plastik',
                'harga' => '3',
            ],
            [
                'nama' => 'Kertas',
                'harga' => '5',
            ],
            [
                'nama' => 'Alumunium',
                'harga' => '7',
            ],
            [
                'nama' => 'Koran Bekas',
                'harga' => '3',
            ],
            [
                'nama' => 'Kaleng',
                'harga' => '5',
            ],
            [
                'nama' => 'Elektronik',
                'harga' => '10',
            ],
        ]);
    }
}
