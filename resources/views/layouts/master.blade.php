<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Sistem Klinik</title>
    
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #0d6efd;
            --bg-light: #f4f7f6;
        }

        body {
            background-color: var(--bg-light);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Navbar Styling */
        .navbar {
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            background: linear-gradient(45deg, #212529, #343a40);
        }

        .navbar-brand {
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        /* Main Content area */
        main {
            min-height: 80vh;
            padding-top: 2rem;
            padding-bottom: 3rem;
        }

        /* Footer simple */
        footer {
            background: #fff;
            padding: 20px 0;
            border-top: 1px solid #dee2e6;
            color: #6c757d;
        }
    </style>
</head>
<body>

    <!-- Navbar sesuai instruksi soal No. 3 -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('pasien.index') }}">
                <i class="bi bi-hospital"></i> Sistem Klinik
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto"> <!-- Menggunakan ms-auto agar menu di kanan -->
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('pasien') ? 'active' : '' }}" href="{{ route('pasien.index') }}">
                            Daftar Pasien
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('pasien/create') ? 'active' : '' }}" href="{{ route('pasien.create') }}">
                            Tambah Pasien
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Area -->
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                @yield('content')
            </div>
        </div>
    </main>

    <footer class="text-center mt-auto">
        <div class="container">
            <small>&copy; {{ date('Y') }} E-Klinik - Ujian Tengah Semester</small>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>