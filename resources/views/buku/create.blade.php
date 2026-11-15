
@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')

<div class="card shadow-sm">
    <div class="card-body p-4">

        <h4 class="fw-bold mb-4">Tambah Data Buku</h4>

        <form action="{{ route('buku.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Judul Buku</label>
                <input type="text" name="judul" class="form-control"
                    placeholder="Masukkan judul buku" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Pengarang</label>
                <input type="text" name="pengarang" class="form-control"
                    placeholder="Nama pengarang" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Penerbit</label>
                <input type="text" name="penerbit" class="form-control"
                    placeholder="Nama penerbit" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tahun Terbit</label>
                <input type="number" name="tahun_terbit" class="form-control"
                    placeholder="2026" min="1000" max="9999" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" name="harga" class="form-control"
                    placeholder="50000" min="0" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Stok</label>
                <input type="number" name="stok" class="form-control"
                    placeholder="Jumlah stok" min="0" required>
            </div>

            <button type="submit" class="btn btn-primary">
                Simpan Buku
            </button>

            <a href="{{ route('buku.index') }}" class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>
</div>

@endsection
