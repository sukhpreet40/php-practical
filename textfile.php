<?php
$file = fopen("data.txt", "w");

if ($file) {
    fwrite($file, "Welcome to PHP Programming.\n");
    fwrite($file, "This is a text file.");
    fclose($file);

    echo "Data written successfully.";
} else {
    echo "Unable to open file.";
}
?>