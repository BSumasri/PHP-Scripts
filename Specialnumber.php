<html>
    <head>
    <title>Special Number</title>
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
$sum_Of_Fact =0;
while (floor($temp) > 0)  
{  
$last_digit = $temp % 10;  
//variable stores factorial   
 $fact=1;  
//factorial logic  
for($i=1; $i<=$last_digit; $i++)  
{  
//calculates factorial       
$fact=$fact*$i;  
}  
//calculates the sum of all factorials  
$sum_Of_Fact = $sum_Of_Fact + $fact;  
//divides the number by 10 and removes the last digit from the number  
$temp = $temp / 10;  
}
if($num==$sum_Of_Fact)  
{  
echo"$num is a special number.";  
}  
else  
{  
    echo"$num is not a  special number.";
} 
?>