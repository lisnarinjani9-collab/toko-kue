<?php

namespace Database\Seeders;

use App\Models\Kue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kue::create([
            'nama_kue' => 'Brownies Coklat',
            'harga_kue' => 25000,
            'stok_kue' => 10,
            'kategori_kue' => 'Brownies',
        ]);
    }
}
