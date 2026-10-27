<?php
$file = "data.txt";

if (file_exists($file)) {
    echo nl2br(htmlspecialchars(file_get_contents($file)));
} else {
    echo "File not found.";
}
?>