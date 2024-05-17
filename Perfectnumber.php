<html>
    <head>
    <title>Perfect Number</title>
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
$num=$_POST['num'];
$temp =$num;
$sum=0;
for ($i = 1; $i < $temp ; $i++) 
    { 
        if ($temp  % $i == 0) 
        { 
            $sum = $sum + $i; 
        }       
    } 
    if($sum == $num)
    {
        echo "Number is Perfect Number...";
    }
    else
    {
        echo "Number is not Perfect Number...";
    }
    ?>





   