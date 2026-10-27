<!DOCTYPE html>
<html>
<body>
    <h2>Employee Details</h2>

    <form method="post">
        Name: <input type="text" name="name" required><br><br>
        Employee ID: <input type="text" name="id" required><br><br>
        Salary: <input type="number" name="salary" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['name'], $_POST['id'], $_POST['salary'])) {
        echo "Name: " . htmlspecialchars($_POST['name']) . "<br>";
        echo "Employee ID: " . htmlspecialchars($_POST['id']) . "<br>";
        echo "Salary: " . htmlspecialchars($_POST['salary']);
    }
    ?>
</body>
</html>