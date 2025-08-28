@extends('layouts.admin')

@section('title', 'Edit Pengaduan')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-success">Edit Pengaduan</h2>
            <a href="{{ route('complaints.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left me-2"></i>Kembali
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
                <form action="{{ route('complaints.update', $complaint->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6">
                            @include('complaints.partials.form', [
                                'complaint' => $complaint,
                                'categories' => $categories,
                            ])
                        </div>

                        <div class="col-md-6">
                            @if ($complaint->photo)
                                <div class="mb-4">
                                    <label class="form-label">Foto Saat Ini</label>
                                    <div class="border rounded p-3 text-center">
                                        <img src="{{ asset('storage/' . $complaint->photo) }}" alt="Current Photo"
                                            class="img-fluid rounded" style="max-height: 200px;">
                                        <div class="mt-2">
                                            <a href="{{ asset('storage/' . $complaint->photo) }}" target="_blank"
                                                class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-zoom-in me-1"></i>Lihat Full
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-check-circle me-2"></i>Update Pengaduan
                        </button>
                        <a href="{{ route('complaints.index') }}" class="btn btn-secondary">
                            <i class="bi bi-x-circle me-2"></i>Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
