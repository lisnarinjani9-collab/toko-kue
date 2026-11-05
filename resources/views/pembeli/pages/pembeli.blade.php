@extends('pembeli.index')
@section('content')
    <main class="main">
        <header class="page-header">
            <div>
                <h1>Pembeli</h1>
                <p class="subtitle">Kelola data pembeli Anda.</p>
            </div>
            <a href="{{ route('pembeli.tambah') }}" class="btn btn-primary">
                + Tambah Pembeli
            </a>
        </header>

        <section class="card">
            @if (session('success'))
                <div class="alert">{{ session('success') }}</div>
            @endif

            <div class="toolbar">
                <input type="search" id="searchPembeli" class="search" placeholder="Cari nama pembeli...">
            </div>

            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Pembeli</th>
                            <th>No. HP</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="daftarPembeli">
                        @foreach ($pembeli as $item)
                            <tr data-nama="{{ $item->nama_pembeli }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_pembeli }}</td>
                                <td>{{ $item->no_hp }}</td>
                                <td>{{ $item->alamat }}</td>
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
