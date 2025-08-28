@extends('layouts.user')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section" style="background: url('{{ asset('images/header_1.png') }}') center/cover no-repeat;">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center text-white">
                    <h1 class="display-3 fw-bold mb-4">Selamat Datang di Desa Banyuwangi</h1>
                    <p class="lead mb-5">Platform resmi pengaduan masyarakat dan informasi desa yang transparan dan mudah
                        diakses.</p>
                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        <a href="{{ route('gallery') }}" class="btn btn-lg btn-success">
                            <i class="bi bi-images me-2"></i> Lihat Gallery
                        </a>
                        <a href="{{ route('complaints.create') }}" class="btn btn-lg btn-outline-light">
                            <i class="bi bi-megaphone me-2"></i> Buat Pengaduan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Informasi Singkat Section -->
    <section class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-success mb-3">Mengenal Desa Banyuwangi</h2>
            <p class="text-muted lead">Pelayanan masyarakat yang modern, cepat, dan transparan.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
                            style="width: 80px; height: 80px;">
                            <i class="bi bi-info-circle text-success fs-1"></i>
                        </div>
                        <h5 class="card-title fw-bold mb-3">Tentang Desa</h5>
                        <p class="card-text text-muted mb-4">Pelajari sejarah, visi misi, serta potensi Desa Banyuwangi.</p>
                        <a href="{{ route('about') }}" class="btn btn-sm btn-success">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
                            style="width: 80px; height: 80px;">
                            <i class="bi bi-chat-left-text text-success fs-1"></i>
                        </div>
                        <h5 class="card-title fw-bold mb-3">Pengaduan</h5>
                        <p class="card-text text-muted mb-4">Sampaikan keluhan Anda secara online agar cepat
                            ditindaklanjuti.</p>
                        <a href="{{ route('complaints.create') }}" class="btn btn-sm btn-success">Buat Pengaduan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
                            style="width: 80px; height: 80px;">
                            <i class="bi bi-telephone text-success fs-1"></i>
                        </div>
                        <h5 class="card-title fw-bold mb-3">Kontak Desa</h5>
                        <p class="card-text text-muted mb-4">Hubungi perangkat desa untuk informasi lebih lanjut.</p>
                        <a href="#footer" class="btn btn-sm btn-success">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Highlight Info Section -->
    <section class="bg-success text-white py-5">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h4 class="fw-bold mb-3">✨ Desa Banyuwangi menuju pelayanan masyarakat yang lebih modern & transparan.
                    </h4>
                    <p class="mb-0">Akses informasi desa dan sampaikan pengaduan dengan mudah melalui platform ini.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Activities Section -->
    {{-- <section class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-success mb-3">Aktivitas Terbaru</h2>
            <p class="text-muted">Kegiatan dan perkembangan terbaru di Desa Banyuwangi</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('images/activity_1.png') }}" class="card-img-top" alt="Kegiatan Desa 1"
                        style="height: 180px; object-fit: cover;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Gotong Royong Membersihkan Desa</h6>
                        <p class="card-text text-muted small">15 Agustus 2023</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('images/activity_2.png') }}" class="card-img-top" alt="Kegiatan Desa 2"
                        style="height: 180px; object-fit: cover;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Pelatihan UMKM Desa</h6>
                        <p class="card-text text-muted small">5 September 2023</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('images/activity_3.png') }}" class="card-img-top" alt="Kegiatan Desa 3"
                        style="height: 180px; object-fit: cover;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Peresmian Taman Desa</h6>
                        <p class="card-text text-muted small">20 Oktober 2023</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('images/activity_4.png') }}" class="card-img-top" alt="Kegiatan Desa 4"
                        style="height: 180px; object-fit: cover;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Festival Budaya Desa</h6>
                        <p class="card-text text-muted small">12 November 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
