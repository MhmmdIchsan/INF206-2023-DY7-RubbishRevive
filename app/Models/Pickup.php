<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pickup extends Model
{
    use HasFactory;
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($pickup) {
            $pickup->user_id = auth()->id();
        });
        static::updating(function ($pickup) {
            $pickup->driver_id = auth()->id();
        });
        
    }

    protected $fillable = [
        'nama',
        'kecamatan',
        'alamat',
        'phone',
        'email',
        'jenissampah',
        'beratsampah',
        'status',
        'harga',
        'image',
        'poin',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getStatusAttribute($input) {
        return [
            0 => 'Pending | Menunggu Pesanan Diambil Oleh Driver',
            1 => 'On Progress | Driver Sedang Dalam Perjalanan',
            2 => 'Done | Pesanan Telah Selesai',
        ][$input];
    }

    public function getKecamatanAttribute($input) {
        return [
            1 => 'Syiah Kuala',
            2 => 'Ulee Kareng',
            3 => 'Lueng Bata',
            4 => 'Kuta Alam',
            5 => 'Baiturrahman',
            6 => 'Banda Raya',
            7 => 'Meuraxa',
            8 => 'Kuta Raja',
            9 => 'Jaya Baru',
        ][$input];
    }
    public function driver()
    {
        // return driver id from user table where role = 2
        return $this->belongsTo(User::class, 'driver_id', 'id')->where('role', 2);

    }
}

