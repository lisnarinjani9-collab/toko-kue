@extends('beranda.index')
@section('content')
    <main class="main">
        <header class="page-header">
            <div>
                <h1>Beranda</h1>
                <p class="subtitle">Ringkasan data toko kue.</p>
            </div>
        </header>

        <section class="ringkasan">
            <div class="kotak">
                <span>Jumlah Kue</span>
                <strong>{{ $jumlahKue }}</strong>
            </div>
            <div class="kotak">
                <span>Jumlah Bahan Baku</span>
                <strong>{{ $jumlahBahan }}</strong>
            </div>
            <div class="kotak">
                <span>Jumlah Pegawai</span>
                <strong>{{ $jumlahPegawai }}</strong>
            </div>
        </section>
    </main>
@endsection
