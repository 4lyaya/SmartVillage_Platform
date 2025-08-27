@extends('layouts.admin')

@section('title', 'Detail Pengaduan')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4">Detail Pengaduan</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <p><strong>Nama:</strong> {{ $complaint->name }}</p>
                <p><strong>NIK:</strong> {{ $complaint->national_id }}</p>
                <p><strong>Alamat:</strong> {{ $complaint->address }}</p>
                <p><strong>Telepon:</strong> {{ $complaint->phone }}</p>
                <p><strong>Email:</strong> {{ $complaint->email ?? '-' }}</p>
                <p><strong>Kategori:</strong> {{ $complaint->category->name }}</p>
                <p><strong>Lokasi:</strong> {{ $complaint->location }}</p>
                <p><strong>Tanggal:</strong> {{ $complaint->date }}</p>
                <p><strong>Deskripsi:</strong> {{ $complaint->description }}</p>
                @if ($complaint->photo)
                    <p><strong>Foto:</strong><br>
                        <img src="{{ asset('storage/' . $complaint->photo) }}" alt="Foto Pengaduan" class="img-fluid mt-2">
                    </p>
                @endif
            </div>
            <div class="card-footer">
                <a href="{{ route('complaints.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
