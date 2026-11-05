@extends('kue.index')
@section('content')
    <main class="main">
        <header class="page-header">
            <div>
                <h1>Tambah Kue</h1>
                <p class="subtitle">Masukkan informasi kue baru.</p>
            </div>
        </header>

        <section class="card form-card">
            @if ($errors->any())
                <ul class="alert-error">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form id="formTambah" method="POST" action="{{ route('kue.store') }}">
                @csrf
                <div class="form-group">
                    <label for="nama_kue">
                        Nama Kue <span class="required">*</span>
                    </label>
                    <input type="text" id="nama_kue" name="nama_kue" value="{{ old('nama_kue') }}"
                        placeholder="Contoh: Brownies Coklat" required>
                </div>

                <div class="form-group">
                    <label for="harga_kue">
                        Harga Kue (Rp) <span class="required">*</span>
                    </label>
                    <input type="number" id="harga_kue" name="harga_kue" value="{{ old('harga_kue') }}"
                        placeholder="Contoh: 15000" min="1000" step="1" required>
                </div>

                <div class="form-group">
                    <label for="stok_kue">
                        Stok Kue <span class="required">*</span>
                    </label>
                    <input type="number" id="stok_kue" name="stok_kue" value="{{ old('stok_kue') }}"
                        placeholder="Contoh: 10" min="1" required>
                </div>

                <div class="form-group">
                    <label for="kategori_kue">
                        Kategori Kue <span class="required">*</span>
                    </label>
                    <select id="kategori_kue" name="kategori_kue" required>
                        <option value="Cake" @selected(old('kategori_kue') == 'Cake')>Cake</option>
                        <option value="Brownies" @selected(old('kategori_kue') == 'Brownies')>Brownies</option>
                        <option value="Kue Kering" @selected(old('kategori_kue') == 'Kue Kering')>Kue Kering</option>
                        <option value="Donat" @selected(old('kategori_kue') == 'Donat')>Donat</option>
                    </select>
                </div>

                <div class="form-actions">
                    <a href="{{ route('kue.table') }}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">
                        Simpan Kue
                    </button>
                </div>
            </form>
        </section>
    </main>
@endsection
