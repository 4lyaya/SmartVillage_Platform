<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Banyuwangi - @yield('title', 'Sistem Pengaduan')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body style="padding-top: 70px;">
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" width="40"
                    class="d-inline-block align-text-top">
                BANYUWANGI
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('gallery') ? 'active' : '' }}"
                            href="{{ route('gallery') }}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('complaints.create') ? 'active' : '' }}"
                            href="{{ route('complaints.create') }}">Pengaduan</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a href="{{ route('login') }}" class="btn btn-outline-light"
                        aria-label="Login sebagai admin">Admin</a>
                </form>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-dark text-white py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Kontak Kami</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt"></i> Kantor Desa Banyuwangi</li>
                        <li><i class="bi bi-telephone"></i> (0333) 1234567</li>
                        <li><i class="bi bi-envelope"></i> pengaduan@desabanyuwangi.id</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Jam Layanan</h5>
                    <ul class="list-unstyled">
                        <li>Senin-Jumat: 08.00 - 16.00 WIB</li>
                        <li>Sabtu: 08.00 - 14.00 WIB</li>
                        <li>Minggu & Hari Libur: Tutup</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Sosial Media</h5>
                    <div class="social-links">
                        <a href="#" class="text-white me-2" aria-label="Facebook"><i
                                class="bi bi-facebook fs-4"></i></a>
                        <a href="#" class="text-white me-2" aria-label="Instagram"><i
                                class="bi bi-instagram fs-4"></i></a>
                        <a href="#" class="text-white me-2" aria-label="WhatsApp"><i
                                class="bi bi-whatsapp fs-4"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p class="mb-0">&copy; {{ date('Y') }} Sistem Pengaduan Masyarakat Desa Banyuwangi</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
