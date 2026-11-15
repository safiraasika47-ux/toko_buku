
@extends('layouts.app')

@section('title', 'Data Buku')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h3 class="fw-bold">Dashboard Toko Buku</h3>
        <p class="text-secondary">Kelola data koleksi buku toko Anda.</p>
    </div>

    <a href="{{ route('buku.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Tambah Buku
    </a>

</div>

<div class="card shadow-sm">
    <div class="card-body">

        <h5 class="fw-bold mb-3">Daftar Buku</h5>

        <div class="table-responsive">
            <table class="table table-hover align-middle">

                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($buku as $item)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->pengarang }}</td>
                        <td>{{ $item->penerbit }}</td>
                        <td>{{ $item->tahun_terbit }}</td>
                        <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                        <td>{{ $item->stok }}</td>

                        <td>
                            <a href="{{ route('buku.edit', $item->id) }}"
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('buku.destroy', $item->id) }}"
                                  method="POST" class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus buku?')">
                                    Hapus
                                </button>

                            </form>
                        </td>
                    </tr>

                    @empty

                    <tr>
                        <td colspan="8" class="text-center text-secondary">
                            Belum ada data buku.
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>
        </div>

    </div>
</div>

@endsection
