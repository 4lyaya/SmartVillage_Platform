@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-success">Dashboard</h2>
            <div class="text-muted">{{ date('l, d F Y') }}</div>
        </div>

        {{-- Statistics --}}
        <div class="row mb-4">
            <div class="col-xl-4 col-md-6 mb-3">
                <div class="card stat-card bg-success text-white">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <h5 class="card-title">Total Users</h5>
                                <p class="card-text display-6 fw-bold">{{ $totalUsers }}</p>
                            </div>
                            <div class="flex-shrink-0">
                                <i class="bi bi-people-fill display-6 opacity-50"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-3">
                <div class="card stat-card bg-primary text-white">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <h5 class="card-title">Total Categories</h5>
                                <p class="card-text display-6 fw-bold">{{ $totalCategories }}</p>
                            </div>
                            <div class="flex-shrink-0">
                                <i class="bi bi-tags-fill display-6 opacity-50"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-3">
                <div class="card stat-card bg-warning text-dark">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <h5 class="card-title">Total Complaints</h5>
                                <p class="card-text display-6 fw-bold">{{ $totalComplaints }}</p>
                            </div>
                            <div class="flex-shrink-0">
                                <i class="bi bi-chat-left-text-fill display-6 opacity-50"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Latest Complaints --}}
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Pengaduan Terbaru</h5>
                <a href="{{ route('complaints.index') }}" class="btn btn-sm btn-success">Lihat Semua</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Lokasi</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($latestComplaints as $complaint)
                                <tr>
                                    <td>{{ $complaint->id }}</td>
                                    <td>{{ $complaint->name }}</td>
                                    <td>
                                        <span class="badge bg-success">{{ $complaint->category->name }}</span>
                                    </td>
                                    <td>{{ Str::limit($complaint->location, 30) }}</td>
                                    <td>{{ \Carbon\Carbon::parse($complaint->date)->format('d M Y') }}</td>
                                    <td>
                                        <a href="{{ route('complaints.show', $complaint->id) }}"
                                            class="btn btn-sm btn-info">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-4">
                                        <i class="bi bi-inbox display-4 text-muted d-block mb-2"></i>
                                        <p class="text-muted">Belum ada pengaduan</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
