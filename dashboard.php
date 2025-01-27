<?php
session_start();

// Periksa apakah user sudah login
if (!isset($_SESSION['username'])){
    header("Location: index.php?error=You must login first!");
    exit();
}
//ambil username dari session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Welcome to Dashboard</h2>
        <p>Hello, <strong><?= htmlspecialchars($username) ?></strong>! Welcome Broo!</p>
        <a href="logout.php">
            <button>Logout</button>
        </a>
    </div>
</body>
</html>