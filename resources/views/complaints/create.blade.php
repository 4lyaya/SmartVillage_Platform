@extends('layouts.user')

@section('title', 'Buat Pengaduan')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section"
        style="background: url('{{ asset('images/header_4.png') }}') center/cover no-repeat; min-height: 40vh;">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center text-white">
                    <h1 class="display-4 fw-bold mb-3">Buat Pengaduan</h1>
                    <p class="lead">Sampaikan keluhan atau masukan Anda untuk kemajuan desa</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Complaint Form -->
    <section class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4 p-md-5">
                        <div class="text-center mb-5">
                            <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
                                style="width: 80px; height: 80px;">
                                <i class="bi bi-megaphone-fill text-success fs-1"></i>
                            </div>
                            <h2 class="fw-bold text-success">Formulir Pengaduan</h2>
                            <p class="text-muted">Isi formulir berikut dengan data yang benar dan lengkap</p>
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ route('complaints.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label fw-semibold">Nama Lengkap <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="name"
                                        class="form-control form-control-lg @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="national_id" class="form-label fw-semibold">NIK <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="national_id"
                                        class="form-control form-control-lg @error('national_id') is-invalid @enderror"
                                        value="{{ old('national_id') }}" required>
                                    @error('national_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label fw-semibold">Alamat Lengkap <span
                                        class="text-danger">*</span></label>
                                <textarea name="address" class="form-control form-control-lg @error('address') is-invalid @enderror" rows="3"
                                    required>{{ old('address') }}</textarea>
                                @error('address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label fw-semibold">Nomor Telepon <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="phone"
                                        class="form-control form-control-lg @error('phone') is-invalid @enderror"
                                        value="{{ old('phone') }}" required>
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label fw-semibold">Email</label>
                                    <input type="email" name="email"
                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="category_id" class="form-label fw-semibold">Kategori Pengaduan <span
                                            class="text-danger">*</span></label>
                                    <select name="category_id"
                                        class="form-select form-select-lg @error('category_id') is-invalid @enderror"
                                        required>
                                        <option value="">-- Pilih Kategori --</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="location" class="form-label fw-semibold">Lokasi Kejadian <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="location"
                                        class="form-control form-control-lg @error('location') is-invalid @enderror"
                                        value="{{ old('location') }}" required>
                                    @error('location')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="date" class="form-label fw-semibold">Tanggal Kejadian <span
                                            class="text-danger">*</span></label>
                                    <input type="date" name="date"
                                        class="form-control form-control-lg @error('date') is-invalid @enderror"
                                        value="{{ old('date') }}" required>
                                    @error('date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="photo" class="form-label fw-semibold">Foto Bukti</label>
                                    <input type="file" name="photo"
                                        class="form-control form-control-lg @error('photo') is-invalid @enderror"
                                        accept="image/*">
                                    @error('photo')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="form-text">Format: JPG, PNG, JPEG.</div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="description" class="form-label fw-semibold">Deskripsi Pengaduan <span
                                        class="text-danger">*</span></label>
                                <textarea name="description" class="form-control form-control-lg @error('description') is-invalid @enderror"
                                    rows="5" required>{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                                <label class="form-check-label" for="agreeTerms">
                                    Saya menyatakan bahwa data yang diisi adalah benar dan dapat dipertanggungjawabkan
                                </label>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success btn-lg px-5">
                                    <i class="bi bi-send-fill me-2"></i> Kirim Pengaduan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <p class="text-muted">Butuh bantuan? Hubungi kami di <a href="mailto:pengaduan@desabanyuwangi.id"
                            class="text-success">pengaduan@desabanyuwangi.id</a> atau <a href="tel:+03331234567"
                            class="text-success">(0333) 1234567</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
