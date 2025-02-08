<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea,rgb(83, 81, 84));
            height: 100vh;
        }
        .login-card {
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            padding: 30px;
        }
        .input-group-text {
            background: #f8f9fa;
            border-right: none;
        }
        .form-control {
            border-left: none;
        }
        .login-btn {
            transition: all 0.3s ease;
        }
        .login-btn:hover {
            background-color:rgb(51, 52, 57);
        }
    </style>
</head>
<body>
    <main class="d-flex justify-content-center align-items-center vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card login-card shadow-lg">
                        <h3 class="text-center mb-4">LOGIN</h3>
                        <form onsubmit="event.preventDefault(); window.location.href='dashboard';">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-key"></i></span>
                                    <input type="password" class="form-control" id="password" name="passwordSS" autocomplete="current-password" placeholder="Enter your GGI" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 login-btn">Login</button>
                        </form>
                        <div class="text-center mt-3">
                            <a href="<?= base_url('auth/forgot') ?>" class="text-decoration-none">Forgot Password?</a> |
                            <a href="<?= base_url('auth/register') ?>" class="text-decoration-none">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>