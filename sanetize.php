<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name'] ?? '');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    $safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');

    if ($email === false || $email === null) {
        echo "Invalid email address.";
    } else {
        echo "Name: " . $safeName . "<br>";
        echo "Email: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    }
}
?>

<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="text" name="email" required><br><br>
    <input type="submit" value="Submit">
</form>