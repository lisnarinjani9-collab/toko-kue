<?php

namespace App\Http\Controllers;

use App\Models\Kue;
use Illuminate\Http\Request;

class KueController extends Controller
{
public function index(Request $request)
{
    $kue = Kue::where('nama_kue', 'like', '%' . $request->cari . '%')->get();

    return view('kue.index', compact('kue'));
}
    public function create()
    {
        return view('kue.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kue' => 'required|string|max:100',
            'kategori' => 'required|in:Cake,Brownies,Kue Kering,Donat',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
        ]);

        Kue::create($request->all());
return redirect('/kue')->with('success', 'Kue berhasil ditambahkan.');        }

}
