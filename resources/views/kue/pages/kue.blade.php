@extends('kue.index')
@section('content')
    <main class="main">
        <header class="page-header">
            <div>
                <h1>Kue</h1>
                <p class="subtitle">Kelola data kue Anda.</p>
            </div>
            <a href="{{ route('kue.tambah') }}" class="btn btn-primary">
                + Tambah Kue
            </a>
        </header>

        <section class="card">
            @if (session('success'))
                <div class="alert">{{ session('success') }}</div>
            @endif

            <div class="toolbar">
                <input type="search" id="searchKue" class="search" placeholder="Cari nama kue...">
            </div>

            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Kue</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="daftarKue">
                        @foreach ($kue as $item)
                            <tr data-nama="{{ $item->nama_kue }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_kue }}</td>
                                <td>{{ $item->kategori_kue }}</td>
                                <td>Rp {{ number_format($item->harga_kue, 0, ',', '.') }}</td>
                                <td>{{ $item->stok_kue }}</td>
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
