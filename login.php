<?php
session_start();
require 'db.php';

// Mengambil data dari form
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = $_POST['password'];

// Periksa username di database
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    
    // Verifikasi password dengan hash yang tersimpan
    if (password_verify($password, $user['password'])) {
        // Login berhasil
        $_SESSION['username'] = $user['username']; // Menyimpan username ke session
        header("Location: dashboard.php");
        exit();
    } else {
        // Password salah
        header("Location: index.php?error=Invalid password");
        exit();
    }
} else {
    // User tidak ditemukan
    header("Location: index.php?error=User not found");
    exit();
}
?>
