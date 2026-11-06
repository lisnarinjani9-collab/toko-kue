@extends('pegawai.index')
@section('content')
    <main class="main">
        <header class="page-header">
            <div>
                <h1>Pegawai</h1>
                <p class="subtitle">Kelola data pegawai Anda.</p>
            </div>
            <a href="{{ route('pegawai.tambah') }}" class="btn btn-primary">
                + Tambah Pegawai
            </a>
        </header>

        <section class="card">
            @if (session('success'))
                <div class="alert">{{ session('success') }}</div>
            @endif

            <div class="toolbar">
                <input type="search" id="searchPegawai" class="search" placeholder="Cari nama pegawai...">
            </div>

            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Pegawai</th>
                            <th>Jabatan</th>
                            <th>No. HP</th>
                            <th>Tanggal Masuk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="daftarPegawai">
                        @foreach ($pegawai as $item)
                            <tr data-nama="{{ $item->nama_pegawai }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_pegawai }}</td>
                                <td>{{ $item->jabatan_pegawai }}</td>
                                <td>{{ $item->no_hp_pegawai }}</td>
                                <td>{{ $item->tanggal_masuk }}</td>
                                <td>
                                    <button type="button" class="btn btn-secondary">Edit</button>
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </main>
@endsection
