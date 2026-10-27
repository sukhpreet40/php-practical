<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" &&
    isset($_FILES['file'])) {

    if ($_FILES['file']['error'] !== UPLOAD_ERR_OK) {
        exit("File upload failed.");
    }

    $tmp = $_FILES['file']['tmp_name'];
    $name = basename($_FILES['file']['name']);
    $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));

    if ($_FILES['file']['size'] > 2 * 1024 * 1024) {
        exit("File must be smaller than 2 MB.");
    }

    $allowed = ['txt', 'jpg', 'jpeg', 'png'];
    if (!in_array($ext, $allowed, true)) {
        exit("Only TXT, JPG, JPEG, and PNG files are allowed.");
    }

    if ($ext !== 'txt') {
        $image = getimagesize($tmp);
        if ($image === false) {
            exit("Invalid image file.");
        }
    }

    $uploadDir = __DIR__ . '/uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $destination = $uploadDir . bin2hex(random_bytes(16)) . '.' . $ext;

    if (move_uploaded_file($tmp, $destination)) {
        echo "File uploaded successfully.";
    } else {
        echo "Unable to save file.";
    }
}
?>

<form method="post" enctype="multipart/form-data">
    Select file:
    <input type="file" name="file" accept=".txt,.jpg,.jpeg,.png" required>
    <input type="submit" value="Upload">
</form>