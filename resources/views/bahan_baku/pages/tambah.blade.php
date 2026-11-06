@extends('bahan_baku.index')
@section('content')
    <main class="main">
        <header class="page-header">
            <div>
                <h1>Tambah Bahan Baku</h1>
                <p class="subtitle">Masukkan informasi bahan baku baru.</p>
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

            <form id="formTambah" method="POST" action="{{ route('bahan_baku.store') }}">
                @csrf
                <div class="form-group">
                    <label for="nama_bahan">
                        Nama Bahan <span class="required">*</span>
                    </label>
                    <input type="text" id="nama_bahan" name="nama_bahan" value="{{ old('nama_bahan') }}"
                        placeholder="Contoh: Tepung Terigu" required>
                </div>

                <div class="form-group">
                    <label for="satuan_bahan">
                        Satuan <span class="required">*</span>
                    </label>
                    <select id="satuan_bahan" name="satuan_bahan" required>
                        <option value="kg" @selected(old('satuan_bahan') == 'kg')>kg</option>
                        <option value="gram" @selected(old('satuan_bahan') == 'gram')>gram</option>
                        <option value="liter" @selected(old('satuan_bahan') == 'liter')>liter</option>
                        <option value="butir" @selected(old('satuan_bahan') == 'butir')>butir</option>
                        <option value="pcs" @selected(old('satuan_bahan') == 'pcs')>pcs</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="stok_bahan">
                        Stok Bahan <span class="required">*</span>
                    </label>
                    <input type="number" id="stok_bahan" name="stok_bahan" value="{{ old('stok_bahan') }}"
                        placeholder="Contoh: 20" min="0" required>
                </div>

                <div class="form-group">
                    <label for="harga_bahan">
                        Harga per Satuan (Rp) <span class="required">*</span>
                    </label>
                    <input type="number" id="harga_bahan" name="harga_bahan" value="{{ old('harga_bahan') }}"
                        placeholder="Contoh: 12000" min="1" step="1" required>
                </div>

                <div class="form-actions">
                    <a href="{{ route('bahan_baku.table') }}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">
                        Simpan Bahan Baku
                    </button>
                </div>
            </form>
        </section>
    </main>
@endsection
