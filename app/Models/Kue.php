<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kue extends Model
{
    use HasFactory;

    protected $table = 'kue';

    protected $fillable = [
        'nama_kue',
        'harga_kue',
        'stok_kue',
        'kategori_kue',
    ];
}
