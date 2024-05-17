<html>
<body>
<form method ='Post'>
Enter a number:
<input type =number name='number1' autofocus />
<button>Submit</button>
</form>
<?php  
$num =$_POST['number1'] ;  
function factorial($num)
{
$factorial = 1;
for ($x=1; $x<=$num; $x++)   
{  
  $factorial = $factorial * $x;  
}  
echo "Factorial of $num is $factorial";  
}
$result=factorial($num);
echo $result;
?> 
</body>
</html>