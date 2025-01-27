<?php
session_start();
session_destroy(); // Hapus semua session
header("Location: index.php?success=You have been logged out");
exit();
?>