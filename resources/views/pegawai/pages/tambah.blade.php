@extends('pegawai.index')
@section('content')
    <main class="main">
        <header class="page-header">
            <div>
                <h1>Tambah Pegawai</h1>
                <p class="subtitle">Masukkan informasi pegawai baru.</p>
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

            <form id="formTambah" method="POST" action="{{ route('pegawai.store') }}">
                @csrf
                <div class="form-group">
                    <label for="nama_pegawai">
                        Nama Pegawai <span class="required">*</span>
                    </label>
                    <input type="text" id="nama_pegawai" name="nama_pegawai" value="{{ old('nama_pegawai') }}"
                        placeholder="Contoh: Siti Aminah" required>
                </div>

                <div class="form-group">
                    <label for="jabatan_pegawai">
                        Jabatan <span class="required">*</span>
                    </label>
                    <select id="jabatan_pegawai" name="jabatan_pegawai" required>
                        <option value="Kasir" @selected(old('jabatan_pegawai') == 'Kasir')>Kasir</option>
                        <option value="Pembuat Kue" @selected(old('jabatan_pegawai') == 'Pembuat Kue')>Pembuat Kue</option>
                        <option value="Dekorator" @selected(old('jabatan_pegawai') == 'Dekorator')>Dekorator</option>
                        <option value="Kurir" @selected(old('jabatan_pegawai') == 'Kurir')>Kurir</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="no_hp_pegawai">
                        No. HP <span class="required">*</span>
                    </label>
                    <input type="text" id="no_hp_pegawai" name="no_hp_pegawai" value="{{ old('no_hp_pegawai') }}"
                        placeholder="Contoh: 081234567890" maxlength="15" required>
                </div>

                <div class="form-group">
                    <label for="tanggal_masuk">
                        Tanggal Masuk <span class="required">*</span>
                    </label>
                  <input type="date" id="tanggal_masuk" name="tanggal_masuk" value="{{ old('tanggal_masuk') }}"
                        min="{{ date('Y-m-d') }}" required>
                </div>

                <div class="form-actions">
                    <a href="{{ route('pegawai.table') }}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">
                        Simpan Pegawai
                    </button>
                </div>
            </form>
        </section>
    </main>
@endsection
