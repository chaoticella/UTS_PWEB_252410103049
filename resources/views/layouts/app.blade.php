<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskNest — @yield('title', 'Personal Task Organizer')</title>
    <!-- Framework CSS Bebas (Menggunakan Bootstrap 5 CDN agar cepat & clean) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    html, body {
        margin: 0 !important;
        padding: 0 !important;
        background-color: #fcf8fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .bg-soft-plum {
        background-color: #906b88 !important;
    }

    .btn-soft-plum {
        background-color: #906b88 !important;
        color: #ffffff !important;
        border: none;
    }

    .btn-soft-plum:hover {
        background-color: #795772 !important;
        color: #ffffff !important;
    }

    .card-custom {
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(144, 107, 136, 0.08);
    }
</style>
</head>
<body class="d-flex flex-column min-vh-100">

    <x-navbar :username="$username ?? null" />

    <main class="container my-4 flex-grow-1">
        @yield('content')
    </main>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
