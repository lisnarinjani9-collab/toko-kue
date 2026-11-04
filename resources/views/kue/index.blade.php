<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kue</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="layout">
        <aside class="sidebar">
            <div class="logo">Toko Kue</div>
            <nav>
                <a href="/">Beranda</a>
                <a href="/kue" class="active">Data Kue</a>
                <a href="/pembeli/create">Data Pembeli</a>
                <a href="/pesanan/create">Data Pesanan</a>
            </nav>
        </aside>

        <main class="main">
            <div class="page-top">
                <div class="page-header">
                    <h1>Data Kue</h1>
                    <p>Daftar kue yang dijual.</p>
                </div>
                <a href="/kue/create" class="btn-tambah">+ Tambah Kue</a>
            </div>

            <div class="card card-lebar">
                @if (session('success'))
                    <div class="alert-success">{{ session('success') }}</div>
                @endif

                <form action="/kue" method="GET" class="search-form">
                    <input type="text" name="cari" value="{{ request('cari') }}" placeholder="Cari nama kue...">
                </form>

                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Kue</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($kue as $k)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $k->nama_kue }}</td>
                                <td>{{ $k->kategori }}</td>
                                <td>Rp {{ number_format($k->harga, 0, ',', '.') }}</td>
                                <td>{{ $k->stok }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="kosong">Belum ada data kue.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>
