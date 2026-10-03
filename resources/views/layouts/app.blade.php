<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | LaporBanjir</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        header, footer { background: #0d6efd; color: white; padding: 12px; text-align: center; }
        nav a { color: white; margin: 0 10px; text-decoration: none; }
        .card { border: 1px solid #ddd; padding: 15px; margin: 10px 0; border-radius: 6px; }
        label { display: block; margin-top: 10px; }
        input { padding: 6px; width: 300px; }
        button { margin-top: 15px; padding: 8px 16px; }
        .error { color: red; font-size: 14px; }
    </style>
</head>
<body>
    <header>
        <h1>LaporBanjir</h1>
        <nav>
            <a href="{{ route('laporan.create') }}">Buat Laporan</a>
            <a href="{{ route('laporan.index') }}">Daftar Laporan</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 LaporBanjir - Rizky Ardiansyah</p>
    </footer>
</body>
</html>