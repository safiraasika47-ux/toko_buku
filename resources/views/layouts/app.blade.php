
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') | Toko Buku</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            background: #f1f5f9;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            background: #172554;
            min-height: 100vh;
            color: white;
            padding: 25px 15px;
        }

        .sidebar h4 {
            font-weight: bold;
            margin-bottom: 35px;
        }

        .sidebar a {
            display: block;
            color: #cbd5e1;
            text-decoration: none;
            padding: 13px;
            margin-bottom: 8px;
            border-radius: 8px;
        }

        .sidebar a:hover {
            background: #2563eb;
            color: white;
        }

        .main-content {
            padding: 25px;
        }

        .navbar {
            background: white;
            padding: 18px;
            border-radius: 10px;
        }

        .card {
            border: none;
            border-radius: 12px;
        }
    </style>
</head>

<body>

<div class="container-fluid">
    <div class="row">

        <!-- SIDEBAR -->
        <div class="col-md-2 sidebar">

            <h4><i class="bi bi-book-half"></i> TOKO BUKU</h4>

            <a href="{{ route('buku.index') }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>

            <a href="{{ route('buku.index') }}">
                <i class="bi bi-book"></i> Data Buku
            </a>

            <a href="{{ route('buku.create') }}">
                <i class="bi bi-plus-circle"></i> Tambah Buku
            </a>

        </div>

        <!-- KONTEN -->
        <div class="col-md-10 main-content">

            <nav class="navbar shadow-sm mb-4">
                <h5 class="mb-0">Sistem Informasi Toko Buku</h5>
                <span class="text-secondary">
                    <i class="bi bi-person-circle"></i>
                    Administrator
                </span>
            </nav>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')

        </div>

    </div>
</div>

</body>
</html>
