<html>
    <head>
    <title>Palindrome</title>
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
while (floor($temp)!=0)
{
 $rem=$temp%10;
 $sum=($sum*10)+$rem;
 $temp= $temp/10; 
}
if($sum==$num)
{
    echo "Number is palindrome...";
}
else
{
    echo "Number is not palindrome...";
}
?>