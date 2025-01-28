<?php
session_start(); // Oturum başlat
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Veritabanı bağlantısı
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_database"; // Veritabanı adınızı yazın

$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Veritabanına bağlanılamadı: " . $conn->connect_error);
}

// Form verilerini işleme
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Girdi kontrolü
    if (empty($name) || empty($email) || empty($password)) {
        $_SESSION['error'] = "Tüm alanlar doldurulmalıdır.";
        header("Location: sign-up.php");
        exit();
    }

    // Şifreyi hashle
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Aynı e-postayı kontrol et
    $checkEmailQuery = "SELECT id FROM users WHERE email = ?";
    $stmt = $conn->prepare($checkEmailQuery);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $_SESSION['error'] = "Bu e-posta adresi zaten kullanılıyor.";
        header("Location: sign-up.php");
        exit();
    }

    // Yeni kullanıcı ekle
    $insertQuery = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param("sss", $name, $email, $hashedPassword);

    if ($stmt->execute()) {
        // Başarılı kayıt mesajı
        $_SESSION['success'] = "Kayıt başarılı! Lütfen giriş yapın.";
        header("Location: sign-in.php"); // Giriş sayfasına yönlendirme
        exit();
    } else {
        $_SESSION['error'] = "Kayıt sırasında bir hata oluştu: " . $conn->error;
        header("Location: sign-up.php");
        exit();
    }

    $stmt->close();
}

$conn->close();
?>




<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #292940;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #3a3a55;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            color: #f57c00;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #f57c00;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #e66a00;
        }

        .error {
            color: #ff4d4d;
            text-align: center;
            margin-bottom: 10px;
        }

        .success {
            color: #4caf50;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sign-up</h1>
        <form action="sign-up.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Enter your e-mail" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit">Sign-up</button>
        </form>
    </div>
</body>
</html>