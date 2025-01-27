<?php
session_start();
require 'db.php';

// Collect data from form
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encrypted password

// Check username availability
$sql_check = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql_check);

if (mysqli_num_rows($result) > 0) {
    header("Location: register.php?error=Username already exists");
    exit(); 
}

// Save data to database
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
if (mysqli_query($conn, $sql)) {
    header("Location: index.php?success=Account created successfully");
    exit();
} else {
    header("Location: register.php?error=Failed to create account");
    exit();
}
?>
