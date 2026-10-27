<?php
if (!isset($_COOKIE['username'])) {
    setcookie("username", "Rahul", time() + 3600, "/");
    echo "Cookie created. Refresh the page to retrieve it.";
} else {
    echo "Username: " .
        htmlspecialchars($_COOKIE['username']);
}
?>