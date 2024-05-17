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
function primeCheck($number)
{
    if ($number == 1)
    {
    return 0;
    }
    else
    {
    for ($i = 2; $i <= $number/2; $i++)
    {
        if ($number % $i == 0)
        {
            return 0;
    }
    return 1;
}
    }
}
$flag = primeCheck($number);
if ($flag == 1)
{
    echo "Number is Prime Number...";
}
else
{
    echo "Number is Not Prime Number...";
}
?>