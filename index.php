<!DOCTPYE html>

<html lang="en">
    <title>Login</title>

    <body>
        <div class="login-container">
            <h2>Login</h2>

            <form action="login.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
            <?php if (isset($_GET['error'])): ?>
                <p class="error"><?= htmlspecialchars($_GET['error']) ?></p>
            <?php endif; ?>
        </div>
    </body>

</html>