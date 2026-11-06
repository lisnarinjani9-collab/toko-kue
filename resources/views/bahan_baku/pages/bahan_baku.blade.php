@extends('bahan_baku.index')
@section('content')
    <main class="main">
        <header class="page-header">
            <div>
                <h1>Bahan Baku</h1>
                <p class="subtitle">Kelola data bahan baku Anda.</p>
            </div>
            <a href="{{ route('bahan_baku.tambah') }}" class="btn btn-primary">
                + Tambah Bahan Baku
            </a>
        </header>

        <section class="card">
            @if (session('success'))
                <div class="alert">{{ session('success') }}</div>
            @endif

            <div class="toolbar">
                <input type="search" id="searchBahan" class="search" placeholder="Cari nama bahan...">
            </div>

            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Bahan</th>
                            <th>Satuan</th>
                            <th>Stok</th>
                            <th>Harga per Satuan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="daftarBahan">
                        @foreach ($bahan as $item)
                            <tr data-nama="{{ $item->nama_bahan }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_bahan }}</td>
                                <td>{{ $item->satuan_bahan }}</td>
                                <td>{{ $item->stok_bahan }}</td>
                                <td>Rp {{ number_format($item->harga_bahan, 0, ',', '.') }}</td>
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
