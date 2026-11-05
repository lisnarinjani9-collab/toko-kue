<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    //index -> menampilkan halaman utama
    public function index()
    {
        $pembeli = Pembeli::get();
        return view('pembeli.pages.pembeli', compact('pembeli'));
    }

    //create -> menampilkan halaman tambah
    public function create()
    {
        return view('pembeli.pages.tambah');
    }

    //store -> menjalankan fungsi tambah data
    public function store(Request $request)
    {
        $request->validate([
            'nama_pembeli' => 'required|string|max:100',
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string|max:200'
        ]);
        Pembeli::create([
            'nama_pembeli' => $request->nama_pembeli,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat
        ]);

        return redirect()->route('pembeli.table')->with('success', 'Data pembeli berhasil ditambahkan.');
    }

    //edit -> menampilkan halaman update
    //update -> menjalankan fungsi edit data

    //destroy -> menghapus data
}
