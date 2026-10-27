<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $mobile = trim($_POST['mobile'] ?? '');

    if ($name == "") {
        echo "Name is required.<br>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.<br>";
    } elseif (!preg_match('/^[0-9]{10}$/', $mobile)) {
        echo "Mobile number must contain 10 digits.<br>";
    } else {
        echo "Registration successful!";
    }
}
?>

<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Mobile: <input type="text" name="mobile" required><br><br>
    <input type="submit" value="Register">
</form>