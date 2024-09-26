<?php
// Start the session
// session_start();

// Set session variables
// $_SESSION["username"] = "JohnDoe";
// $_SESSION["email"] = "john.doe@example.com";

// echo "Session variables are set.";
// ?> 


<?php
// Check if the user is logged in
if (isset($_SESSION["username"])) {
    echo "Welcome " . $_SESSION["username"] . "!<br>";
    echo '<a href="logout.php">Logout</a>';
} else {
    echo '<form method="post" action="login.php">
            Username: <input type="text" name="username"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" value="Login">
          </form>';
}
?>