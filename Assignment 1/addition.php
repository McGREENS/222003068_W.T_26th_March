<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition Result</title>
</head>
<body style="background-color: rgb(43, 226, 177);">
<center>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $fullName = $firstName . " " . $lastName;
        $sum = $num1 + $num2;

        echo "<h1>Hello $fullName</h1>";
        echo "<p>The sum is: $sum</p>";
    }
    ?>
    </center>
</body>
</html>
