@extends('layouts.admin')

@section('title', 'Daftar Pengaduan')

@section('content')
    <div class="container">
        <h1 class="mb-4">Daftar Pengaduan</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('complaints.create') }}" class="btn btn-success mb-3">Tambah Pengaduan</a>

        <table class="table table-striped">
            <thead>
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
                        <td>{{ $complaint->category->name }}</td>
                        <td>{{ $complaint->location }}</td>
                        <td>{{ $complaint->date }}</td>
                        <td>
                            <a href="{{ route('complaints.show', $complaint->id) }}" class="btn btn-info btn-sm">Lihat</a>
                            <a href="{{ route('complaints.edit', $complaint->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('complaints.destroy', $complaint->id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">Belum ada pengaduan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
