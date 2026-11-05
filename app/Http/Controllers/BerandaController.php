<?php

namespace App\Http\Controllers;

use App\Models\Kue;
use App\Models\Pembeli;

class BerandaController extends Controller
{
    //index -> menampilkan halaman beranda
    public function index()
    {
        $jumlahKue = Kue::count();
        $jumlahPembeli = Pembeli::count();
        return view('beranda.pages.beranda', compact('jumlahKue', 'jumlahPembeli'));
    }
}
