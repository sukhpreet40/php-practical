<?php
$file = fopen("data.txt", "a");

if ($file) {
    fwrite($file, "\nNew data appended to the file.");
    fclose($file);

    echo "Data appended successfully.";
} else {
    echo "Unable to open file.";
}
?>