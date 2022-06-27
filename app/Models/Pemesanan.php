<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanan';

    protected $fillable = [
        'id',
        'nama_barang',
        'pelanggan_id',
        'jenis_cuci_id',
        'status',
        'created_at',
        'updated_at',
    ];
}
