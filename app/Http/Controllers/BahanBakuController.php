<?php

namespace App\Http\Controllers;

use App\Models\BahanBaku;
use Illuminate\Http\Request;

class BahanBakuController extends Controller
{
    //index -> menampilkan halaman utama
    public function index()
    {
        $bahan = BahanBaku::get();
        return view('bahan_baku.pages.bahan_baku', compact('bahan'));
    }

    //create -> menampilkan halaman tambah
    public function create()
    {
        return view('bahan_baku.pages.tambah');
    }

    //store -> menjalankan fungsi tambah data
    public function store(Request $request)
    {
        $request->validate([
            'nama_bahan' => 'required|string|max:100',
            'kategori_bahan' => 'required|in:Bahan Kering,Bahan Basah,Topping',
            'stok_bahan' => 'required|integer',
            'harga_bahan' => 'required|integer'
        ]);
        BahanBaku::create([
            'nama_bahan' => $request->nama_bahan,
            'kategori_bahan' => $request->kategori_bahan,
            'stok_bahan' => $request->stok_bahan,
            'harga_bahan' => $request->harga_bahan
        ]);

        return redirect()->route('bahan_baku.table')->with('success', 'Data bahan baku berhasil ditambahkan.');
    }

    //edit -> menampilkan halaman update
    //update -> menjalankan fungsi edit data

    //destroy -> menghapus data
}
