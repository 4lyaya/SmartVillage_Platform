<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Banyuwangi - @yield('title', 'Sistem Pengaduan')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --primary-color: #2e7d32;
            --primary-light: #4caf50;
            --primary-dark: #1b5e20;
            --secondary-color: #f5f5f5;
            --text-color: #333;
            --text-light: #666;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
            padding-top: 76px;
            background-color: #f9f9f9;
        }

        .navbar {
            box-shadow: var(--shadow);
            padding: 0.8rem 1rem;
        }

        .navbar-brand {
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-link {
            font-weight: 500;
            position: relative;
            margin: 0 0.2rem;
            transition: var(--transition);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background-color: white;
            transition: var(--transition);
            transform: translateX(-50%);
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 80%;
        }

        .btn-success {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            transition: var(--transition);
        }

        .btn-success:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            transform: translateY(-2px);
        }

        .btn-outline-success {
            color: var(--primary-color);
            border-color: var(--primary-color);
            transition: var(--transition);
        }

        .btn-outline-success:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-2px);
        }

        .card {
            border: none;
            border-radius: 12px;
            transition: var(--transition);
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
        }

        .hero-section {
            min-height: 85vh;
            display: flex;
            align-items: center;
            position: relative;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.7));
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        footer {
            background-color: #1a1a1a;
        }

        .social-links a {
            transition: var(--transition);
        }

        .social-links a:hover {
            transform: translateY(-3px);
        }

        .gallery-img {
            border-radius: 8px;
            overflow: hidden;
            transition: var(--transition);
        }

        .gallery-img:hover {
            transform: scale(1.03);
        }

        .form-control:focus {
            border-color: var(--primary-light);
            box-shadow: 0 0 0 0.25rem rgba(46, 125, 50, 0.25);
        }

        @media (max-width: 768px) {
            body {
                padding-top: 70px;
            }

            .hero-section {
                min-height: 60vh;
                text-align: center;
            }

            .display-3 {
                font-size: 2.5rem;
            }

            .display-4 {
                font-size: 2.2rem;
            }
        }
    </style>
</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('login') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Desa Banyuwangi" style="height:50px; width:auto;"
                    class="d-inline-block align-text-top">
                <span>DESA BANYUWANGI</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('gallery') ? 'active' : '' }}"
                            href="{{ route('gallery') }}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('complaints.create') ? 'active' : '' }}"
                            href="{{ route('complaints.create') }}">Pengaduan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="fw-bold mb-3">Kontak Kami</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-geo-alt-fill me-2"></i> Kantor Desa Banyuwangi</li>
                        <li class="mb-2"><i class="bi bi-telephone-fill me-2"></i> (0333) 1234567</li>
                        <li class="mb-2"><i class="bi bi-envelope-fill me-2"></i> pengaduan@desabanyuwangi.id</li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="fw-bold mb-3">Jam Layanan</h5>
                    <ul class="list-unstyled">
                        <li class="mb-1">Senin-Jumat: 08.00 - 16.00 WIB</li>
                        <li class="mb-1">Sabtu: 08.00 - 14.00 WIB</li>
                        <li>Minggu & Hari Libur: Tutup</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">Sosial Media</h5>
                    <div class="social-links d-flex gap-3">
                        <a href="#" class="text-white" aria-label="Facebook">
                            <i class="bi bi-facebook fs-4"></i>
                        </a>
                        <a href="#" class="text-white" aria-label="Instagram">
                            <i class="bi bi-instagram fs-4"></i>
                        </a>
                        <a href="#" class="text-white" aria-label="WhatsApp">
                            <i class="bi bi-whatsapp fs-4"></i>
                        </a>
                        <a href="#" class="text-white" aria-label="YouTube">
                            <i class="bi bi-youtube fs-4"></i>
                        </a>
                    </div>
                    <div class="mt-4">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo Desa Banyuwangi" width="60"
                            class="img-fluid">
                    </div>
                </div>
            </div>
            <hr class="my-4 bg-light">
            <div class="text-center">
                <p class="mb-0">&copy; {{ date('Y') }} Sistem Pengaduan Masyarakat Desa Banyuwangi. All rights
                    reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add active class to current page in navbar
        document.addEventListener('DOMContentLoaded', function() {
            const currentLocation = location.href;
            const menuItems = document.querySelectorAll('.nav-link');
            const menuLength = menuItems.length;

            for (let i = 0; i < menuLength; i++) {
                if (menuItems[i].href === currentLocation) {
                    menuItems[i].classList.add('active');
                }
            }
        });
    </script>
</body>

</html>
