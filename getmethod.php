<!DOCTYPE html>
<html>
<body>
    <h2>Student Details</h2>

    <form method="get">
        Name: <input type="text" name="name" required><br><br>
        Roll No: <input type="text" name="roll" required><br><br>
        Course: <input type="text" name="course" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($_GET['name'], $_GET['roll'], $_GET['course'])) {
        echo "Name: " . htmlspecialchars($_GET['name']) . "<br>";
        echo "Roll No: " . htmlspecialchars($_GET['roll']) . "<br>";
        echo "Course: " . htmlspecialchars($_GET['course']);
    }
    ?>
</body>
</html>