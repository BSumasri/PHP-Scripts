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
    $sql ="delete from registration where fn ='sumasri';";
    if($Conn -> query($sql)==TRUE)
    {
        echo"Record deleted sussfully...";
    }
    else
    {
        echo"Error encountered...".$Conn -> error;   
    }
}
?>