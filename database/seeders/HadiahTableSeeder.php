<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HadiahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hadiah')->insert([
            [
                'namahadiah' => 'Voucher Pulsa 10.000',
                'poin' => '10',
            ],
            [
                'namahadiah' => 'Voucher Pulsa 20.000',
                'poin' => '20',
            ],
            [
                'namahadiah' => 'Voucher Pulsa 50.000',
                'poin' => '50',
            ],
            [
                'namahadiah' => 'Voucher Pulsa 100.000',
                'poin' => '100',
            ],
            [
                'namahadiah' => 'Token 50.000',
                'poin' => '50',
            ],
            [
                'namahadiah' => 'Token 100.000',
                'poin' => '100',
            ],
            [
                'namahadiah' => 'Token 150.000',
                'poin' => '150',
            ],
            [
                'namahadiah' => 'Token 200.000',
                'poin' => '200',
            ],
        ]);
    }
}
