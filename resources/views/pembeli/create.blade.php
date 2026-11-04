<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pembeli</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="layout">
        <aside class="sidebar">
            <div class="logo">Toko Kue</div>
            <nav>
                <a href="/kue/create">Data Kue</a>
                <a href="/pembeli/create" class="active">Data Pembeli</a>
                <a href="/pesanan/create">Data Pesanan</a>
            </nav>
        </aside>

        <main class="main">
            <div class="page-header">
                <h1>Tambah Pembeli</h1>
                <p>Isi data pembeli.</p>
            </div>

            <div class="card">
                @if (session('success'))
                    <div class="alert-success">{{ session('success') }}</div>
                @endif

                @if ($errors->any())
                    <ul class="alert-error">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form action="/pembeli" method="POST" class="form-grid">
                    @csrf
                    <div class="form-group">
                        <label>Nama Pembeli</label>
                        <input type="text" name="nama_pembeli" value="{{ old('nama_pembeli') }}" placeholder="Contoh: Budi Santoso">
                    </div>
                    <div class="form-group">
                        <label>No. HP</label>
                        <input type="text" name="no_hp" value="{{ old('no_hp') }}" placeholder="Contoh: 081234567890">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" value="{{ old('alamat') }}" placeholder="Contoh: Jl. Merdeka No. 10">
                    </div>
                    <div class="form-action">
                        <button type="submit" class="btn">Simpan</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
