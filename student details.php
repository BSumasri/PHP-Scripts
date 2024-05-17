<!DOCTYPE html>
<html>
<head>
    <title>Student Details and Marks List</title>
</head>
<body>

<h2>Enter Student Details and Marks</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Student Name: <input type="text" name="name"><br><br>
    Roll Number: <input type="text" name="roll"><br><br>
    Subject 1: <input type="number" name="sub1" min="0" max="100"><br><br>
    Subject 2: <input type="number" name="sub2" min="0" max="100"><br><br>
    Subject 3: <input type="number" name="sub3" min="0" max="100"><br><br>
    Subject 4: <input type="number" name="sub4" min="0" max="100"><br><br>
    Subject 5: <input type="number" name="sub5" min="0" max="100"><br><br>
    Subject 6: <input type="number" name="sub6" min="0" max="100"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $sub1 = $_POST['sub1'];
    $sub2 = $_POST['sub2'];
    $sub3 = $_POST['sub3'];
    $sub4 = $_POST['sub4'];
    $sub5 = $_POST['sub5'];
    $sub6 = $_POST['sub6'];

    // Calculate total marks
    $total_marks = $sub1 + $sub2 + $sub3 + $sub4 + $sub5 + $sub6;

    // Calculate percentage
    $percentage = ($total_marks / 600) * 100;

    // Display student details and marks
    echo "<h2>Student Details and Marks List</h2>";
    echo "Name: $name <br>";
    echo "Roll Number: $roll <br>";
    echo "Subject 1: $sub1 <br>";
    echo "Subject 2: $sub2 <br>";
    echo "Subject 3: $sub3 <br>";
    echo "Subject 4: $sub4 <br>";
    echo "Subject 5: $sub5 <br>";
    echo "Subject 6: $sub6 <br>";
    echo "Total Marks: $total_marks <br>";
    echo "Percentage: $percentage% <br>";
}
?>

</body>
</html>