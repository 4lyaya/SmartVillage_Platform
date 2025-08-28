@extends('layouts.admin')

@section('title', 'Detail Pengaduan')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-success">Detail Pengaduan</h2>
            <a href="{{ route('complaints.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left me-2"></i>Kembali
            </a>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Informasi Pengaduan</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Nama:</strong><br>{{ $complaint->name }}</p>
                                <p><strong>NIK:</strong><br>{{ $complaint->national_id }}</p>
                                <p><strong>Alamat:</strong><br>{{ $complaint->address }}</p>
                                <p><strong>Telepon:</strong><br>{{ $complaint->phone }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Email:</strong><br>{{ $complaint->email ?? '-' }}</p>
                                <p><strong>Kategori:</strong><br>
                                    <span class="badge bg-success">{{ $complaint->category->name }}</span>
                                </p>
                                <p><strong>Lokasi:</strong><br>{{ $complaint->location }}</p>
                                <p><strong>Tanggal:</strong><br>{{ \Carbon\Carbon::parse($complaint->date)->format('d M Y') }}
                                </p>
                            </div>
                        </div>

                        <div class="mt-3">
                            <p><strong>Deskripsi:</strong></p>
                            <div class="border rounded p-3 bg-light">
                                {{ $complaint->description }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                @if ($complaint->photo)
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Foto Bukti</h5>
                        </div>
                        <div class="card-body text-center">
                            <img src="{{ asset('storage/' . $complaint->photo) }}" alt="Foto Pengaduan"
                                class="img-fluid rounded" style="max-height: 300px;">
                            <div class="mt-3">
                                <a href="{{ asset('storage/' . $complaint->photo) }}" target="_blank"
                                    class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-zoom-in me-2"></i>Lihat Full Size
                                </a>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="card mt-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Aksi</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <a href="{{ route('complaints.edit', $complaint->id) }}" class="btn btn-warning">
                                <i class="bi bi-pencil me-2"></i>Edit Pengaduan
                            </a>
                            <form action="{{ route('complaints.destroy', $complaint->id) }}" method="POST" class="d-grid">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Yakin ingin menghapus pengaduan ini?')">
                                    <i class="bi bi-trash me-2"></i>Hapus Pengaduan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
