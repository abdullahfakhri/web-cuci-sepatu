<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_cuci extends Model
{
    use HasFactory;

    protected $table = 'jenis_cuci';

    protected $fillable = [
        'id',
        'nama_jenis_cuci',
        'created_at',
        'updated_at',
    ];
}
