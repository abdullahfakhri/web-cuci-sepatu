<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama_pelanggan',
        'alamat',
        'kontak',
        'created_at',
        'updated_at',
    ];
}
