<?php

namespace App\Http\Controllers;

use App\Models\Kue;
use Illuminate\Http\Request;

class KueController extends Controller
{
    public function create()
    {
        return view('kue.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kue' => 'required|string|max:100',
            'kategori' => 'required|string|max:50',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
        ]);

        Kue::create($request->all());

    return redirect('/kue/create')->with('success', 'Kue berhasil ditambahkan.');    }
}
