@extends('layouts.user')

@section('title', 'Gallery')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section"
        style="background: url('{{ asset('images/header_2.png') }}') center/cover no-repeat; min-height: 50vh;">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center text-white">
                    <h1 class="display-4 fw-bold mb-3">Gallery Desa Banyuwangi</h1>
                    <p class="lead">Dokumentasi kegiatan & keindahan desa</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Grid -->
    <section class="container py-5">
        <div class="row g-4">
            @for ($i = 1; $i <= 12; $i++)
                <div class="col-md-6 col-lg-4">
                    <div class="card gallery-card border-0 shadow-sm h-100">
                        <div class="gallery-img">
                            <img src="{{ asset('images/photo_' . $i . '.png') }}" class="card-img-top"
                                alt="Foto Desa {{ $i }}" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Pemandangan Desa {{ $i }}</h6>
                            <p class="card-text text-muted small">Lokasi: Area Desa Banyuwangi</p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>

        <!-- Pagination -->
        <nav aria-label="Gallery pagination" class="mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </section>

    <!-- Call to Action -->
    <section class="bg-light py-5">
        <div class="container text-center">
            <h3 class="fw-bold mb-4">Lihat lebih banyak kegiatan desa</h3>
            <p class="text-muted mb-4">Ikuti terus perkembangan dan kegiatan terbaru di Desa Banyuwangi</p>
            <a href="{{ route('about') }}" class="btn btn-success btn-lg">
                <i class="bi bi-info-circle me-2"></i> Pelajari lebih lanjut
            </a>
        </div>
    </section>
@endsection
