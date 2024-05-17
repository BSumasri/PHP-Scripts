<html>
    <head>
    <title>Prime Number</title>
</head>
<body>
    <form method="POST">
        <lable>Enter a number:</lable><br/>
    <input type='number' name ='num' placeholder='Eg:10' autofocus  required/><br/>
    <button>Submit</button>
</form>
</body>
</html>
<?php
$number=$_POST['num'];
echo"***Prime Number from 1 to $number***<br/>";
for($i = 1; $i <= $number; $i++)
    {
        if ($number % $i == 0)
        {
            echo $i."  ";
    }
}
?>