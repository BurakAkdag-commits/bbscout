<?php
session_start(); // Oturum başlat
if (!isset($_SESSION['user_id'])) {
    // Giriş yapılmamışsa sign-in.php'ye yönlendirin
    header("Location: sign-in.php");
    exit();
}
?>
