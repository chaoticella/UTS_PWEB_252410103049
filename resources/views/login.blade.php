<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Bloomlet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            margin: 0 !important;
            padding: 0 !important;
            background-color: #fcf8fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Warna Soft Plum / Dusty Rose */
        .text-soft-plum {
            color: #906b88 !important;
        }

        .btn-soft-plum {
            background-color: #906b88 !important;
            color: #ffffff !important;
            border: none;
            transition: all 0.2s ease-in-out;
        }

        .btn-soft-plum:hover {
            background-color: #795772 !important;
            color: #ffffff !important;
        }

        .card-custom {
            border: none;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(144, 107, 136, 0.12);
        }

        .form-control:focus {
            border-color: #906b88;
            box-shadow: 0 0 0 0.25rem rgba(144, 107, 136, 0.25);
        }
    </style>
</head>
<body class="d-flex align-items-center min-vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-8">
                <div class="card card-custom bg-white p-2">
                    <div class="card-body p-4 text-center">
                        <h3 class="fw-bold text-soft-plum mb-1">Bloomlet</h3>
                        <p class="text-muted small mb-4">Your Personal Task Organizer</p>

                        <form action="{{ route('login.process') }}" method="POST">
                            @csrf
                            <div class="mb-3 text-start">
                                <label for="username" class="form-label fw-semibold text-secondary small">Username</label>
                                <input type="text" name="username" id="username" class="form-control py-2" placeholder="Masukkan nama kamu..." required autocomplete="off">
                            </div>
                            <button type="submit" class="btn btn-soft-plum w-100 py-2 fw-bold rounded-3 mt-2">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
