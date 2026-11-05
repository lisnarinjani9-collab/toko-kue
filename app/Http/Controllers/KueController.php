<?php

namespace App\Http\Controllers;

use App\Models\Kue;
use Illuminate\Http\Request;

class KueController extends Controller
{
    //index -> menampilkan halaman utama
    public function index()
    {
        $kue = Kue::get();
        return view('kue.pages.kue', compact('kue'));
    }

    //create -> menampilkan halaman tambah
    public function create()
    {
        return view('kue.pages.tambah');
    }

    //store -> menjalankan fungsi tambah data
    public function store(Request $request)
    {
        $request->validate([
            'nama_kue' => 'required|string|max:100',
            'harga_kue' => 'required|integer',
            'stok_kue' => 'required|integer',
            'kategori_kue' => 'required|in:Cake,Brownies,Kue Kering,Donat'
        ]);
        Kue::create([
            'nama_kue' => $request->nama_kue,
            'harga_kue' => $request->harga_kue,
            'stok_kue' => $request->stok_kue,
            'kategori_kue' => $request->kategori_kue
        ]);

        return redirect()->route('kue.table')->with('success', 'Data kue berhasil ditambahkan.');
    }

    //edit -> menampilkan halaman update
    //update -> menjalankan fungsi edit data

    //destroy -> menghapus data
}
