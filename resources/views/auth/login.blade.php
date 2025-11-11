<!DOCTYPE html>
<html>

<head>
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #eef2f7;
        }

        .login-card {
            width: 380px;
            border-radius: 14px;
        }
    </style>
</head>

<body>

    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card p-4 shadow login-card">

            <h3 class="text-center mb-4 fw-bold">Login</h3>

            <form method="POST" action="/login">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-semibold">Username</label>
                    <input name="username" class="form-control" placeholder="Masukkan username" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                </div>

                <button type="submit" class="btn btn-primary w-100 fw-semibold py-2">
                    Login
                </button>

            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>