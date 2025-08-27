{{-- resources/views/home.blade.php --}}
@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="position-relative text-center text-white"
        style="background: url('{{ asset('images/header_1.png') }}') center/cover no-repeat; min-height: 80vh;">
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
        <div class="position-relative d-flex flex-column justify-content-center align-items-center h-100 px-3">
            <h1 class="display-3 fw-bold">Selamat Datang di Desa Banyuwangi</h1>
            <p class="lead mb-4">Platform resmi pengaduan masyarakat dan informasi desa yang transparan dan mudah diakses.
            </p>
            <a href="{{ route('gallery') }}" class="btn btn-lg btn-success me-2">Lihat Gallery</a>
            <a href="{{ route('complaints.create') }}" class="btn btn-lg btn-outline-light">Buat Pengaduan</a>
        </div>
    </section>

    <!-- Informasi Singkat Section -->
    <section class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-success">Mengenal Desa Banyuwangi</h2>
            <p class="text-muted">Pelayanan masyarakat yang modern, cepat, dan transparan.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="card-body">
                        <i class="bi bi-info-circle text-success fs-1 mb-3"></i>
                        <h5 class="card-title fw-bold">Tentang Desa</h5>
                        <p class="card-text">Pelajari sejarah, visi misi, serta potensi Desa Banyuwangi.</p>
                        <a href="{{ route('about') }}" class="btn btn-sm btn-success">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="card-body">
                        <i class="bi bi-chat-left-text text-success fs-1 mb-3"></i>
                        <h5 class="card-title fw-bold">Pengaduan</h5>
                        <p class="card-text">Sampaikan keluhan Anda secara online agar cepat ditindaklanjuti.</p>
                        <a href="{{ route('complaints.create') }}" class="btn btn-sm btn-success">Buat Pengaduan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="card-body">
                        <i class="bi bi-telephone text-success fs-1 mb-3"></i>
                        <h5 class="card-title fw-bold">Kontak Desa</h5>
                        <p class="card-text">Hubungi perangkat desa untuk informasi lebih lanjut.</p>
                        <a href="#footer" class="btn btn-sm btn-success">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Highlight Info Section -->
    <section class="bg-success text-white py-5">
        <div class="container text-center">
            <h4 class="fw-bold mb-3">✨ Desa Banyuwangi menuju pelayanan masyarakat yang lebih modern & transparan.</h4>
            <p class="mb-0">Akses informasi desa dan sampaikan pengaduan dengan mudah melalui platform ini.</p>
        </div>
    </section>
@endsection
