<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pickup extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'phone',
        'email',
        'jenissampah',
        'beratsampah',
        'status',
    ];
}
