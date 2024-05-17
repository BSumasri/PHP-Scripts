<?php
$pw ="";
$Conn = new mysqli('localhost','root',$pw,'test');
if($Conn->connect_error)
{
echo  $conn->connect_error;
die("Connection failed:".$Conn->connect_error);
}
else
{
    $sql ="update registration set ln='basava' where fn ='chandana';";
    if($Conn -> query($sql)==TRUE)
    {
        echo"Record updated...";
    }
    else
    {
        echo"Error encountered...";   
    }
}
?>