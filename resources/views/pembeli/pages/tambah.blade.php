@extends('pembeli.index')
@section('content')
    <main class="main">
        <header class="page-header">
            <div>
                <h1>Tambah Pembeli</h1>
                <p class="subtitle">Masukkan informasi pembeli baru.</p>
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

            <form id="formTambah" method="POST" action="{{ route('pembeli.store') }}">
                @csrf
                <div class="form-group">
                    <label for="nama_pembeli">
                        Nama Pembeli <span class="required">*</span>
                    </label>
                    <input type="text" id="nama_pembeli" name="nama_pembeli" value="{{ old('nama_pembeli') }}"
                        placeholder="Contoh: Budi Santoso" required>
                </div>

                <div class="form-group">
                    <label for="no_hp">
                        No. HP <span class="required">*</span>
                    </label>
                    <input type="text" id="no_hp" name="no_hp" value="{{ old('no_hp') }}"
                        placeholder="Contoh: 081234567890" maxlength="15" required>
                </div>

                <div class="form-group">
                    <label for="alamat">
                        Alamat <span class="required">*</span>
                    </label>
                    <input type="text" id="alamat" name="alamat" value="{{ old('alamat') }}"
                        placeholder="Contoh: Jl. Merdeka No. 10" maxlength="200" required>
                </div>

                <div class="form-actions">
                    <a href="{{ route('pembeli.table') }}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">
                        Simpan Pembeli
                    </button>
                </div>
            </form>
        </section>
    </main>
@endsection
