<?php
setcookie("user", "John Doe", time() + 3600, "/");

if (isset($_COOKIE["user"])) {
    $user = $_COOKIE["user"];
    if (preg_match("/john/i", $user)) {
        echo "User contains 'john' (case-insensitive search)";
    } else {
        echo "User does not contain 'john'";
    }
} else {
    echo "User is not set";
}
?>