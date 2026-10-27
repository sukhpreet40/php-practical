<?php
$students = array(
    array("Rahul", 85, "BCA"),
    array("Priya", 90, "BSc"),
    array("Aman", 78, "BCom")
);

for ($i = 0; $i < count($students); $i++) {
    echo "Name: " . $students[$i][0] . "<br>";
    echo "Marks: " . $students[$i][1] . "<br>";
    echo "Course: " . $students[$i][2] . "<br><br>";
}
?>