<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kue extends Model
{
    protected $table = 'kue';
    protected $fillable = ['nama_kue', 'kategori', 'harga', 'stok'];
}
