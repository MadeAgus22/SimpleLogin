<?php
session_start();

if (!isser($_SESSION['username'])) {
    header("Location index.php"){}
    exit();
}

?>

<!DOCTPYE html>
<html lang="en">
    <head>
        <title>DashboardLogin</title>
    </head>

    <body>
        <h1>Selamat datang anda berhasil membuat menu login</h1>

        <a href="logout.php">Logout</a>
    </body>
</html>