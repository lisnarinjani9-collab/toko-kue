<?php

namespace App\Http\Controllers;

use App\Models\BahanBaku;
use App\Models\Kue;
use App\Models\Pegawai;

class BerandaController extends Controller
{
    //index -> menampilkan halaman beranda
    public function index()
    {
        $jumlahKue = Kue::count();
        $jumlahBahan = BahanBaku::count();
        $jumlahPegawai = Pegawai::count();
        return view('beranda.pages.beranda', compact('jumlahKue', 'jumlahBahan', 'jumlahPegawai'));
    }
}
