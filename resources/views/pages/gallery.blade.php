@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
    <!-- Hero Section -->
    <div class="position-relative text-center text-white"
        style="background: url('{{ asset('images/header_2.png') }}') center/cover no-repeat; min-height: 40vh;">
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
        <div class="position-relative d-flex flex-column justify-content-center align-items-center h-100">
            <h1 class="display-4 fw-bold">Gallery Desa Banyuwangi</h1>
            <p class="lead">Dokumentasi kegiatan & keindahan desa</p>
        </div>
    </div>

    <!-- Gallery Grid -->
    <div class="container py-5">
        <div class="row g-4">
            <!-- Item Gallery -->
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm h-100">
                    <div class="ratio ratio-4x3">
                        <img src="{{ asset('images/photo_1.png') }}" class="card-img-top img-fluid" alt="Sawah Desa"
                            style="object-fit: cover; height: 100%; width: 100%;">
                    </div>

                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm h-100">
                    <div class="ratio ratio-4x3">
                        <img src="{{ asset('images/photo_2.png') }}" class="card-img-top img-fluid" alt="Pantai Desa"
                            style="object-fit: cover; height: 100%; width: 100%;">
                    </div>

                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm h-100">
                    <div class="ratio ratio-4x3">
                        <img src="{{ asset('images/photo_3.png') }}" class="card-img-top img-fluid" alt="Kegiatan Desa"
                            style="object-fit: cover; height: 100%; width: 100%;">
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
