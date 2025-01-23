<?php

$host = "localhost";
$user ="root";
$pass = "";
$db = "login_app";

$conn = mysqli_conect($host, $user, $pass, $db);

if(!$conn){
    die("Koneksi Gagal!" . mysqli_conect_error());
}