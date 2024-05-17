bn<!DOCTYPE html>
<html>
<body>
<h1>Enter Student Details:</h1>
<form method="post" action="">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" ><br>
    <label for="roll_number">Roll Number:</label>
    <input type="text" id="roll_number" name="roll_number" ><br>  
    <label for="dld">dld:</label>
    <input type="number" id="dld" name="dld" min="0" max="100"><br>    
    <label for="or">or:</label>
    <input type="number" id="or" name="or" min="0" max="100" ><br>
   
    <label for="ds">ds:</label>
    <input type="number" id="ds" name="ds" min="0" max="100" ><br>    
    <input type="submit" value="Generate Marks List">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $roll_number = $_POST['roll_number'];
    $dld = $_POST['dld'];
    $or = $_POST['or'];
    $ds = $_POST['ds'];
    $total_marks = $dld + $or + $ds;
    $average_marks = $total_marks / 3;
    echo "<h2>Marks List:</h2>";
    echo "Name: $name";
    echo "<p>Roll Number: $roll_number</p>";
    echo "<p>dld: $dld</p>";
    echo "<p>or: $or</p>";
    echo "<p>ds: $ds</p>";
    echo "<p>Total Marks: $total_marks</p>";
    echo "<p>Average Marks: $average_marks</p>";
}
?>

</body>
</html>