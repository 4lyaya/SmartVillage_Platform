@extends('layouts.admin')

@section('title', 'Daftar Pengaduan')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-success">Daftar Pengaduan</h2>
            <a href="{{ route('complaints.create') }}" class="btn btn-outline-success btn-sm d-flex align-items-center px-3">
                <i class="bi bi-plus-circle me-2"></i>Tambah Pengaduan
            </a>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>Kategori</th>
                                <th>Lokasi</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($complaints as $complaint)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $complaint->name }}</td>
                                    <td>{{ $complaint->national_id }}</td>
                                    <td>
                                        <span class="badge rounded-pill bg-success px-3 py-2 text-white text-capitalize">
                                            <i class="bi bi-folder-fill me-1"></i> {{ $complaint->category->name }}
                                        </span>
                                    </td>
                                    <td>{{ Str::limit($complaint->location, 20) }}</td>
                                    <td>{{ \Carbon\Carbon::parse($complaint->date)->format('d M Y') }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('complaints.show', $complaint->id) }}"
                                                class="btn btn-outline-info btn-sm d-flex align-items-center px-3"
                                                title="Lihat">
                                                <i class="bi bi-eye me-1"></i> Lihat
                                            </a>

                                            <a href="{{ route('complaints.edit', $complaint->id) }}"
                                                class="btn btn-outline-warning btn-sm d-flex align-items-center px-3"
                                                title="Edit">
                                                <i class="bi bi-pencil me-1"></i> Edit
                                            </a>

                                            <form action="{{ route('complaints.destroy', $complaint->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-outline-danger btn-sm d-flex align-items-center px-3"
                                                    title="Hapus"
                                                    onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                    <i class="bi bi-trash me-1"></i> Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center py-4">
                                        <i class="bi bi-inbox display-4 text-muted d-block mb-2"></i>
                                        <p class="text-muted">Belum ada pengaduan</p>
                                        <a href="{{ route('complaints.create') }}" class="btn btn-success mt-2">
                                            <i class="bi bi-plus-circle me-2"></i>Tambah Pengaduan
                                        </a>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if ($complaints->hasPages())
                    <div class="d-flex justify-content-center mt-4">
                        {{ $complaints->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
