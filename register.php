<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Create Account</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container">
            <h2>Create Account</h2>
            <form action="process_register.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password">
                <button type="submit">Register</button>
            </form>

            <?php if (isset($_GET['error'])): ?>
                <p class="error"><?= htmlspecialchars($_GET['error']) ?></p>
            <?php elseif (isset($_GET['success'])): ?>
                <p class="success"><?= htmlspecialchars($_GET['success']) ?></p>
            <?php endif; ?>
        </div>
    </body>

</html>
