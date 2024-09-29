<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login Page</h2>
    <form action="login.php" method="post">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Dummy credentials for demonstration
        $valid_username = "admin";
        $valid_password = "password123";

        if ($username === $valid_username && $password === $valid_password) {
            echo "<p>Login successful! Welcome, $username.</p>";
        } else {
            echo "<p>Invalid username or password.</p>";
        }
    }
    ?>
</body>
</html>