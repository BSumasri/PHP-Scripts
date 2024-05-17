<html>
    <head>
        <title>SQL Connection</title>
    </head>
<body>
<form method="POST">
    <label>Enter Your First name:</label><br/>
    <input type ="text" name ="Fn"/> <br/>
    <label>Enter Your Last name:</label><br/>
    <input type ="text" name ="ln"/> <br/>
    <label>Male:</label><br/>
    <input type ="radio" name ="gen" value ="Male"/> <br/>
    <label>Female:</label><br/>
    <input type ="radio" name ="gen" value ="Female"/> <br/>
    <label>Others:</label><br/>
    <input type ="radio" name ="gen" value ="Others"/> <br/>
    <label>Enter Your Email:</label><br/>
    <input type ="text" name ="em"/> <br/>
    <label>Enter Your password:</label><br/>
    <input type ="password" name ="pw"/><br/>
    <label>Enter Your Number:</label><br/>
    <input type = "number" name ="num"/><br/>
    <button>Submit</button>
</form>
<?php 
$Firstname =$_POST['Fn'];
$Lastname =$_POST['ln'];
$gender =$_POST['gen'];
$email =$_POST['em'];
$Password =$_POST['pw'];
$Number =$_POST['num'];
$pw ="";
$Conn = new mysqli('localhost','root',$pw,'test');
if($Conn->connect_error)
{
echo  $conn->connect_error;
die("Connection failed:".$Conn->connect_error);
}
else
{
    $stmt =$Conn->prepare("insert into registration(Fn,ln,gen,em,pw,num)values(?,?,?,?,?,?)");
    $stmt->bind_param("sssssi",$Firstname,$Lastname,$gender,$email,$Password,$Number);
    $execval =$stmt->execute();
    echo"Registration Sucessful...";
    $stmt->close();
    $Conn->close();
}
?>
</body>
</html>