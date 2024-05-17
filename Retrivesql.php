<?php
$pw ="";
$Conn = new mysqli('localhost','root',$pw,'test');
if($Conn->connect_error)
{
echo  $Conn->connect_error;
die("Connection failed:".$Conn->connect_error);
}
else
{
    $query="select * from registration;";
    $result = $Conn->query($query);
    if ($result->num_rows>0)
    {
        while ($row = $result->fetch_assoc())
        {
            echo "Firstname :". $row["Fn"]."  "."-Lastname:" .$row["ln"]." "."Gender:".$row["gen"]."  "."Email:".$row["em"]."  "."Password:" .$row["pw"].
            "  "."Phone number:" .$row["num"]."<br/>";
        }
    }
    else
    {
       echo"0 results";
    }
    $Conn->close();
}
?>