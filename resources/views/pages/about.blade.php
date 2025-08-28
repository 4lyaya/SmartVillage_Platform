@extends('layouts.user')

@section('title', 'Tentang Desa')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section"
        style="background: url('{{ asset('images/header_3.png') }}') center/cover no-repeat; min-height: 50vh;">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center text-white">
                    <h1 class="display-4 fw-bold mb-3">Tentang Desa Banyuwangi</h1>
                    <p class="lead">Mengenal lebih dekat desa kami</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Content -->
    <section class="container py-5">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="fw-bold text-success mb-4">Desa Banyuwangi</h2>
                <p class="lead text-muted mb-4">
                    Desa Banyuwangi adalah salah satu desa yang kaya akan budaya, tradisi, dan keindahan alamnya.
                    Dikelilingi oleh pegunungan, sawah yang hijau, serta pantai yang menawan.
                </p>
                <p class="mb-4">
                    Desa ini menjadi pusat kegiatan masyarakat yang menjunjung tinggi nilai gotong royong. Selain potensi
                    wisata, Desa Banyuwangi juga dikenal dengan hasil pertaniannya, kerajinan lokal, dan berbagai acara adat
                    yang masih dijaga dengan baik hingga saat ini.
                </p>
                <div class="d-flex flex-wrap gap-2">
                    <span class="badge bg-success bg-opacity-10 text-success p-2">Pertanian</span>
                    <span class="badge bg-success bg-opacity-10 text-success p-2">Wisata</span>
                    <span class="badge bg-success bg-opacity-10 text-success p-2">Kerajinan</span>
                    <span class="badge bg-success bg-opacity-10 text-success p-2">Budaya</span>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ asset('images/village.png') }}" class="img-fluid rounded shadow-sm" alt="Desa Banyuwangi">
            </div>
        </div>

        <!-- Visi Misi -->
        <div class="row mt-5">
            <div class="col-lg-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3"
                                style="width: 50px; height: 50px;">
                                <i class="bi bi-eye-fill text-success"></i>
                            </div>
                            <h4 class="fw-bold text-success mb-0">Visi</h4>
                        </div>
                        <p class="mb-0">Mewujudkan Desa Banyuwangi yang maju, mandiri, dan berdaya saing dengan tetap
                            menjaga kelestarian budaya dan lingkungan.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3"
                                style="width: 50px; height: 50px;">
                                <i class="bi bi-bullseye text-success"></i>
                            </div>
                            <h4 class="fw-bold text-success mb-0">Misi</h4>
                        </div>
                        <ul class="mb-0 ps-3">
                            <li>Meningkatkan kualitas pendidikan dan kesehatan masyarakat.</li>
                            <li>Mengembangkan potensi wisata alam dan budaya desa.</li>
                            <li>Mendorong pertumbuhan ekonomi berbasis pertanian dan UMKM.</li>
                            <li>Menjaga kelestarian lingkungan hidup dan kearifan lokal.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistics -->
        <div class="row mt-5 text-center">
            <div class="col-md-3 col-6 mb-4">
                <div class="border-end border-2 border-success py-3">
                    <h3 class="fw-bold text-success">2,500+</h3>
                    <p class="text-muted mb-0">Jumlah Penduduk</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="border-end border-2 border-success py-3">
                    <h3 class="fw-bold text-success">15+</h3>
                    <p class="text-muted mb-0">Tahun Berdiri</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="border-end border-2 border-success py-3">
                    <h3 class="fw-bold text-success">50+</h3>
                    <p class="text-muted mb-0">UMKM Terdaftar</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="py-3">
                    <h3 class="fw-bold text-success">10+</h3>
                    <p class="text-muted mb-0">Program Unggulan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-success">Hubungi Kami</h2>
                <p class="text-muted">Silakan hubungi kami untuk informasi lebih lanjut</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <h5 class="fw-bold mb-3">Kantor Desa Banyuwangi</h5>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="bi bi-geo-alt-fill text-success me-2"></i> Jl. Raya
                                            Desa Banyuwangi No. 123</li>
                                        <li class="mb-2"><i class="bi bi-telephone-fill text-success me-2"></i> (0333)
                                            1234567</li>
                                        <li class="mb-2"><i class="bi bi-envelope-fill text-success me-2"></i>
                                            desa@banyuwangi.go.id</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="fw-bold mb-3">Jam Operasional</h5>
                                    <ul class="list-unstyled">
                                        <li class="mb-1">Senin - Kamis: 08.00 - 16.00 WIB</li>
                                        <li class="mb-1">Jumat: 08.00 - 11.00 WIB</li>
                                        <li class="mb-1">Sabtu: 08.00 - 14.00 WIB</li>
                                        <li>Minggu & Hari Libur: Tutup</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
