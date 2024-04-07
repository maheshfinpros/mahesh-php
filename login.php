<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mahesh Blog</title>
</head>
<body>
    <h1>Login to Mahesh Blog</h1>
    <?php if (isset($login_error)) { echo "<p>$login_error</p>"; } ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="admin" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" value="mahesh" required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
