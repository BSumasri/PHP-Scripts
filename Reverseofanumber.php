tml>
    <head>
    <title>Reverse of a Number</title>
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
while (floor($num)!=0)
{
 $rem=$num%10;
 $sum=($sum*10)+$rem;
 $num= $num/10; 
}
echo "Reverse of a Number is:$sum";
?>