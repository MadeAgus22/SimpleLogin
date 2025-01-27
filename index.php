<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container">
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password">
                <button type="submit">Login</button>
            </form>
        
            <div class="create-account">
                    <p>Belum Punya Akun?</p>
                    <a href="register.php">Create Account</a>
            </div>
                <?php if (isset($_GET['error'])): ?>
                    <p class="error"><?= htmlspecialchars($_GET['error']) ?></p>
                <?php endif; ?>
        </div>
    </body>

</html>