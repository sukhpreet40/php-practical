<?php
$str = "Hello World";

echo "Length: " . strlen($str) . "<br>";
echo "Substring: " . substr($str, 0, 5) . "<br>";
echo "Replace: " . str_replace("World", "PHP", $str) . "<br>";
echo "Position: " . strpos($str, "World");
?>