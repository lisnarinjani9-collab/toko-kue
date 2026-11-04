<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kue</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="layout">
        <aside class="sidebar">
            <div class="logo">Toko Kue</div>
            <nav>
                <a href="/kue/create" class="active">Data Kue</a>
                <a href="/pembeli/create">Data Pembeli</a>
                <a href="/pesanan/create">Data Pesanan</a>
            </nav>
        </aside>

        <main class="main">
            <div class="page-header">
                <h1>Tambah Kue</h1>
                <p>Isi data kue yang akan dijual.</p>
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

                <form action="/kue" method="POST" class="form-grid">
                    @csrf
                    <div class="form-group">
                        <label>Nama Kue</label>
                    <input type="text" id="nama_kue" name="nama_kue" placeholder="Contoh: Brownies Coklat" required>
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="kategori">
                            <option value="">-- Pilih Kategori --</option>
                            <option value="Cake" @selected(old('kategori') == 'Cake')>Cake</option>
                            <option value="Brownies" @selected(old('kategori') == 'Brownies')>Brownies</option>
                            <option value="Kue Kering" @selected(old('kategori') == 'Kue Kering')>Kue Kering</option>
                            <option value="Donat" @selected(old('kategori') == 'Donat')>Donat</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Harga (Rp)</label>
                    <input type="number" id="harga" name="harga" placeholder="Contoh: 15000" min="1000"
                        step="1" required>
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="number" id="stok" name="stok" value="{{ old('stok') }}" placeholder="Contoh: 10" min="1">
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
