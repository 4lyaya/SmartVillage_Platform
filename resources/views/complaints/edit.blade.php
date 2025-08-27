{{-- resources/views/complaints/edit.blade.php --}}
@extends('layouts.admin')

@section('title', 'Edit Pengaduan')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4">Edit Pengaduan</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('complaints.update', $complaint->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Memanggil partial form --}}
            @include('complaints.partials.form', ['complaint' => $complaint, 'categories' => $categories])

            <div class="mt-4">
                <button type="submit" class="btn btn-success">Update Pengaduan</button>
                <a href="{{ route('complaints.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
@endsection
