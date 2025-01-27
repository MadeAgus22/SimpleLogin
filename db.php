<?php

$servername = "localhost";
$user = "root";
$password ="";
$dbname = "web_login";

//create conection 
$conn = mysqli_connect($host, $user, $password, $dbname);

//check conection 
if (!$conn){
    die("Conection failed :" . mysqli_connect_error());
}