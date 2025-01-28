<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    if (!empty($name) && !empty($email) && !empty($password)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = "SELECT * FROM users WHERE email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                if (password_verify($password, $user['password'])) {
                    $_SESSION['user_id'] = $user['id'];

                    $login_time = date("Y-m-d H:i:s");
                    $log_sql = "INSERT INTO user_logs (user_id, login_time) VALUES (?, ?)";
                    $log_stmt = $conn->prepare($log_sql);
                    $log_stmt->bind_param("is", $user['id'], $login_time);
                    $log_stmt->execute();

                    // `name` içinde "akdag" veya "senler" kontrolü
                    if (stripos($name, 'akdag') !== false || stripos($name, 'senler') !== false) {
                        header("Location: admin.php");
                    } else {
                        header("Location: dashboard.php");
                    }
                    exit();
                } else {
                    $error = "Hatalı şifre.";
                }
            } else {
                $error = "Kullanıcı bulunamadı.";
            }
        } else {
            $error = "Geçersiz e-posta formatı.";
        }
    } else {
        $error = "Lütfen tüm alanları doldurun.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #292940;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: #ff6f00;
            color: #fff;
        }

        .card-header {
            text-align: center;
            background-color: #ff6f00;
            border-radius: 15px 15px 0 0;
            color: #fff;
            padding: 20px;
        }

        .btn-custom {
            background-color: #fff;
            color: #ff6f00;
            border: 2px solid #ff6f00;
            border-radius: 10px;
            padding: 10px;
            font-size: 1.1rem;
            width: 100%;
            margin-top: 20px;
        }

        .btn-custom:hover {
            background-color: #292940;
            color: #fff;
            border: 2px solid #292940;
        }

        .form-control {
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .alert {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="card-header">
        <h3>Welcome Back</h3>
        <p class="text-muted">Please enter your credentials to sign in</p>
    </div>
    <div class="card-body">
        <!-- Hata mesajı gösterimi -->
        <?php if (!empty($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>

        <!-- Giriş Formu -->
        <form method="POST" action="">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-custom">Sign In</button>
            </div>
        </form>
    </div>
    <div class="card-footer text-center">
        <p class="text-muted">Don't have an account? <a href="sign-up.php">Sign up</a></p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

