<?php

session_start();
require 'db.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_queri($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
} else {
    header("Locatio: index.php?error=Invalid Username or Password");
}