<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Addition</title>
</head>
<body>
    <h2>Add Two Numbers</h2>
    <form method="post">
        <label for="num1">Number A:</label>
        <input type="number" id="num1" name="num1" required>
        <br><br>
        <label for="num2">Number B:</label>
        <input type="number" id="num2" name="num2" required>
        <br><br>
        <input type="submit" name="submit" value="Add">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $result = $num1 + $num2;
        echo "<h3>Adding $num1 + $num2 together = $result</h3>";
    }
    ?>
</body>
</html>