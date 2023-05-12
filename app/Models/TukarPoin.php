<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TukarPoin extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($tukarpoin) {
            $tukarpoin->user_id = auth()->id();
            // $poin = Hadiah::where('namahadiah', $tukarpoin->namahadiah)->value('poin');
        });
    }

    protected $fillable = [
        'nama',
        'nohp',
        'namahadiah',
        'status',
        'poin',
    ];

    protected $table = 'tukarpoin';

    public function getNamaHadiahAttribute($input) {
        return [
            1 => 'Pulsa 10.000',
            2 => 'Pulsa 20.000',
            3 => 'Pulsa 50.000',
            4 => 'Token Listrik 50.000',
            5 => 'Token Listrik 100.000',
            6 => 'Token Listrik 150.000',
            7 => 'Token Listrik 200.000',
        ][$input];
    }

    public function getStatusAttribute($input) {
        return [
            0 => 'Pending | Menunggu Pesanan Dikonfirmasi Oleh Admin',
            1 => 'On Progress | Admin Sedang Memproses Penukaran',
            2 => 'Done | Penukaran Telah Selesai',
        ][$input];
    }
}
