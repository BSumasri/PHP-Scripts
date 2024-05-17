<html>
    <head>
    <title>Areas of 2D shapes</title>
</head>
<body>
    <form method="POST">
        <lable>Enter the length:</lable><br/>
    <input type='number' name =length placeholder='Eg:10' autofocus  required/><br/>
    <lable>Enter the breadth:</lable><br/>
    <input type ='number' name='breadth' required/><br/>
    <lable>Enter the side of a square:</lable><br/>
    <input type ='number' name='side' required/><br/>
    <lable>Enter the radius of a square:</lable><br/>
    <input type ='number' name='radius' required/><br/>
    <button>Submit</button>
</form>
</body>
</html>
<?php
$l=$_POST['length'];
$b=$_POST['breadth'];
$s=$_POST['side'];
$r=$_POST['radius'];
function rectangle($l,$b)
{
    $result = $l*$b;
    echo "Area of Rectangle is..";
    echo $result."<br/>";
}
function triangle($l,$b)
{
    $result =(0.5*($l*$b));
    echo "Area of triangle is..";
    echo $result."<br/>";
}
function Square($s)
{
    $result =$s*$s;
    echo "Area of Squareis..";
    echo $result."<br/>";
}
function Circle($r)
{
    $result =(3.14*($r*$r));
    echo "Area of Rectangle is..";
    echo $result."<br/>";
}
echo"***Areas of all 2D Shapes***<br/>";
rectangle($l,$b);
triangle($l,$b);
Square($s);
Circle($r);
?>





