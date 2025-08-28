<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Admin Desa Banyuwangi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-color: #2e7d32;
            --primary-light: #4caf50;
            --primary-dark: #1b5e20;
            --sidebar-width: 250px;
            --sidebar-collapsed: 70px;
            --transition: all 0.3s ease;
            --text-color: #333;
            --text-light: #666;
            --bg-light: #f8f9fa;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-light);
            color: var(--text-color);
            overflow-x: hidden;
        }

        /* Sidebar Styles */
        #sidebar {
            width: var(--sidebar-width);
            background: var(--primary-color);
            color: white;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            transition: var(--transition);
            box-shadow: var(--shadow);
        }

        .sidebar-header {
            padding: 1.5rem 1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar-brand {
            font-weight: 700;
            font-size: 1.25rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sidebar-brand img {
            width: 35px;
            height: 35px;
        }

        .sidebar-menu {
            padding: 1rem 0;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 0.75rem 1.5rem;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: var(--transition);
            border-left: 3px solid transparent;
        }

        .nav-link:hover,
        .nav-link.active {
            color: white;
            background: rgba(255, 255, 255, 0.1);
            border-left-color: white;
        }

        .nav-link i {
            width: 20px;
            text-align: center;
        }

        /* Main Content */
        #content {
            margin-left: var(--sidebar-width);
            transition: var(--transition);
            min-height: 100vh;
        }

        .topbar {
            background: white;
            padding: 1rem 1.5rem;
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 999;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .main-content {
            padding: 1.5rem;
        }

        /* Cards */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background: white;
            border-bottom: 1px solid #eee;
            font-weight: 600;
            border-radius: 12px 12px 0 0 !important;
        }

        /* Tables */
        .table th {
            font-weight: 600;
            border-top: none;
            background-color: #f8f9fa;
        }

        .table-hover tbody tr:hover {
            background-color: rgba(46, 125, 50, 0.05);
        }

        /* Buttons */
        .btn {
            border-radius: 8px;
            font-weight: 500;
            transition: var(--transition);
        }

        .btn-success {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-success:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            transform: translateY(-2px);
        }

        /* Forms */
        .form-control,
        .form-select {
            border-radius: 8px;
            padding: 0.75rem 1rem;
            border: 1px solid #ddd;
            transition: var(--transition);
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary-light);
            box-shadow: 0 0 0 0.25rem rgba(46, 125, 50, 0.25);
        }

        /* Alerts */
        .alert {
            border-radius: 8px;
            border: none;
        }

        /* Responsive */
        @media (max-width: 768px) {
            #sidebar {
                width: var(--sidebar-collapsed);
                text-align: center;
            }

            .sidebar-brand span,
            .nav-link span {
                display: none;
            }

            #content {
                margin-left: var(--sidebar-collapsed);
            }

            .nav-link {
                padding: 0.75rem;
                justify-content: center;
            }

            .nav-link i {
                font-size: 1.25rem;
            }
        }

        @media (max-width: 576px) {
            #sidebar {
                width: 0;
                overflow: hidden;
            }

            #content {
                margin-left: 0;
            }

            .sidebar-toggle {
                display: block !important;
            }
        }

        .sidebar-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.25rem;
            color: var(--text-color);
        }

        .user-dropdown .dropdown-toggle::after {
            display: none;
        }

        .user-dropdown .dropdown-toggle {
            display: flex;
            align-items: center;
            gap: 10px;
            background: none;
            border: none;
            color: var(--text-color);
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
        }

        .stat-card {
            border-left: 4px solid;
        }

        .stat-card.bg-success {
            border-left-color: var(--primary-dark);
        }

        .stat-card.bg-primary {
            border-left-color: #0d6efd;
        }

        .stat-card.bg-warning {
            border-left-color: #ffc107;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-brand">
                <i class="bi bi-shield-lock"></i>
                <span>Admin Panel</span>
            </div>
        </div>

        <div class="sidebar-menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}"
                        href="{{ route('dashboard') }}">
                        <i class="bi bi-speedometer2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('complaints*') ? 'active' : '' }}"
                        href="{{ route('complaints.index') }}">
                        <i class="bi bi-chat-left-text"></i>
                        <span>Pengaduan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('categories*') ? 'active' : '' }}"
                        href="{{ route('categories.index') }}">
                        <i class="bi bi-tags"></i>
                        <span>Kategori</span>
                    </a>
                </li>
                @if (Auth::user()->isSuperAdmin())
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admins*') ? 'active' : '' }}"
                            href="{{ route('admins.index') }}">
                            <i class="bi bi-people"></i>
                            <span>Admin Management</span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <div class="topbar">
            <button class="sidebar-toggle" id="sidebarToggle">
                <i class="bi bi-list"></i>
            </button>

            <div class="user-dropdown dropdown ms-auto">
                <button class="btn d-flex align-items-center border-0 bg-transparent dropdown-toggle" type="button"
                    id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">

                    <!-- Avatar -->
                    <div class="user-avatar bg-success text-white rounded-circle d-flex justify-content-center align-items-center me-2"
                        style="width: 36px; height: 36px; font-size: 0.9rem;">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>

                    <!-- Info User -->
                    <div class="d-none d-md-block text-start">
                        <div class="fw-semibold">{{ Auth::user()->name }}</div>
                        <small class="text-muted">{{ ucfirst(Auth::user()->role) }}</small>
                    </div>
                </button>

                <!-- Dropdown Menu -->
                <ul class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="userDropdown">
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bi bi-person me-2"></i> Profile
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="m-0">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="bi bi-box-arrow-right me-2"></i> Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="main-content">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Sidebar toggle functionality
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('content');

            if (sidebar.style.width === '0px' || sidebar.style.width === '') {
                sidebar.style.width = '250px';
                content.style.marginLeft = '250px';
            } else {
                sidebar.style.width = '0';
                content.style.marginLeft = '0';
            }
        });

        // Auto-collapse sidebar on mobile
        function checkWidth() {
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('content');

            if (window.innerWidth <= 576) {
                sidebar.style.width = '0';
                content.style.marginLeft = '0';
            } else if (window.innerWidth <= 768) {
                sidebar.style.width = '70px';
                content.style.marginLeft = '70px';
            } else {
                sidebar.style.width = '250px';
                content.style.marginLeft = '250px';
            }
        }

        // Initial check
        checkWidth();

        // Check on resize
        window.addEventListener('resize', checkWidth);
    </script>
</body>

</html>
