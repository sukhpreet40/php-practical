<?php
$numbers = array(40, 10, 30, 20, 50);

sort($numbers);
echo "Ascending order: ";
print_r($numbers);

echo "<br>";

rsort($numbers);
echo "Descending order: ";
print_r($numbers);
?>