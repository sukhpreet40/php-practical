<?php
session_start();

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    echo "Logged out successfully.";
} elseif (isset($_POST['username'], $_POST['password'])) {
    if ($_POST['username'] === "admin" &&
        $_POST['password'] === "1234") {
        session_regenerate_id(true);
        $_SESSION['username'] = "admin";
        echo "Login successful. Welcome, admin!";
    } else {
        echo "Invalid username or password.";
    }
} elseif (isset($_SESSION['username'])) {
    echo "Welcome, " .
        htmlspecialchars($_SESSION['username']);
    echo '<br><a href="?logout=1">Logout</a>';
} else {
    echo '<form method="post">
        Username: <input name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>';
}
?>