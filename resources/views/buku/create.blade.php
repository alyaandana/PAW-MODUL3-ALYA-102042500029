@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h3 class="fw-bold mb-1">Tambah Buku Baru</h3>
                <p class="text-muted small mb-0">Isi formulir berikut untuk menambahkan buku ke sistem perpustakaan.</p>
            </div>
            <a href="{{ route('buku.index') }}" class="btn btn-outline-secondary btn-sm">
                <i class="bi bi-arrow-left me-1"></i> Kembali
            </a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body p-4">
                <form action="{{ route('buku.store') }}" method="POST">
                    @csrf

                   <form action="{{ route('buku.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="judul" class="form-label">Judul Buku</label>
        <input type="text" name="judul" id="judul"
               value="{{ old('judul') }}"
               class="form-control @error('judul') is-invalid @enderror">
        @error('judul')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="penulis" class="form-label">Penulis</label>
        <input type="text" name="penulis" id="penulis"
               value="{{ old('penulis') }}"
               class="form-control @error('penulis') is-invalid @enderror">
        @error('penulis')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="penerbit" class="form-label">Penerbit</label>
        <input type="text" name="penerbit" id="penerbit"
               value="{{ old('penerbit') }}"
               class="form-control @error('penerbit') is-invalid @enderror">
        @error('penerbit')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
        <input type="number" name="tahun_terbit" id="tahun_terbit"
               value="{{ old('tahun_terbit', date('Y')) }}"
               class="form-control @error('tahun_terbit') is-invalid @enderror">
        @error('tahun_terbit')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="stok" class="form-label">Jumlah Stok</label>
        <input type="number" name="stok" id="stok" min="0"
               value="{{ old('stok', 1) }}"
               class="form-control @error('stok') is-invalid @enderror">
        @error('stok')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="d-flex justify-content-end gap-2">
        <a href="{{ route('buku.index') }}" class="btn btn-light border">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan Buku</button>
    </div>
</form>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
