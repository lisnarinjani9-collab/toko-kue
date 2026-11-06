<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    //index -> menampilkan halaman utama
    public function index()
    {
        $pegawai = Pegawai::get();
        return view('pegawai.pages.pegawai', compact('pegawai'));
    }

    //create -> menampilkan halaman tambah
    public function create()
    {
        return view('pegawai.pages.tambah');
    }

    //store -> menjalankan fungsi tambah data
    public function store(Request $request)
    {
        $request->validate([
            'nama_pegawai' => 'required|string|max:100',
            'jabatan_pegawai' => 'required|in:Kasir,Pembuat Kue,Dekorator,Kurir',
            'no_hp_pegawai' => 'required|string|max:15',
            'tanggal_masuk' => 'required|date|after_or_equal:today'
        ]);
        Pegawai::create([
            'nama_pegawai' => $request->nama_pegawai,
            'jabatan_pegawai' => $request->jabatan_pegawai,
            'no_hp_pegawai' => $request->no_hp_pegawai,
            'tanggal_masuk' => $request->tanggal_masuk
        ]);

        return redirect()->route('pegawai.table')->with('success', 'Data pegawai berhasil ditambahkan.');
    }

    //edit -> menampilkan halaman update
    //update -> menjalankan fungsi edit data

    //destroy -> menghapus data
}
