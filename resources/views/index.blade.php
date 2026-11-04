<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="layout">
        <aside class="sidebar">
            <div class="logo">Toko Kue</div>
            <nav>
                <a href="/" class="active">Beranda</a>
                <a href="/kue">Data Kue</a>
                <a href="/pembeli/create">Data Pembeli</a>
                <a href="/pesanan/create">Data Pesanan</a>
            </nav>
        </aside>

        <main class="main">
            <div class="page-header">
                <h1>Beranda</h1>
                <p>Ringkasan data toko kue.</p>
            </div>

            <div class="ringkasan">
                <div class="kotak">
                    <span>Jumlah Kue</span>
                    <strong>{{ $jumlahKue }}</strong>
                </div>
                <div class="kotak">
                    <span>Jumlah Pembeli</span>
                    <strong>{{ $jumlahPembeli }}</strong>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
