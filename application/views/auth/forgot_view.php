<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea,rgb(83, 81, 84));
            height: 100vh;
        }
        .forgot-card {
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
        .forgot-btn {
            transition: all 0.3s ease;
        }
        .forgot-btn:hover {
            background-color:rgb(51, 52, 57);
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow-lg p-4">
                    <h3 class="text-center mb-4">FORGOT PASSWORD</h3>
                    <p class="text-center">Enter your username, and we will send you a recovery link.</p>
                    <form onsubmit="event.preventDefault(); alert('Password reset link sent!'); window.location.href='login.html';">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="text" class="form-control" id="username" placeholder="Enter your username" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning w-100 forgot-btn">Send Reset Link</button>
                    </form>
                    <div class="text-center mt-3">
                        <a href="<?= base_url('auth') ?>" class="text-decoration-none">Back to Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
