<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Kue</title>
</head>
<body>
    <h2>Tambah Kue</h2>
    
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/kue" method="POST">
        @csrf
        <div>
            <label>Nama Kue:</label>
            <input type="text" name="nama_kue" value="{{ old('nama_kue') }}">
        </div>
        <div>
            <label>Kategori:</label>
            <input type="text" name="kategori" value="{{ old('kategori') }}">
        </div>
        <div>
            <label>Harga:</label>
            <input type="number" name="harga" value="{{ old('harga') }}">
        </div>
        <div>
            <label>Stok:</label>
            <input type="number" name="stok" value="{{ old('stok') }}">
        </div>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
