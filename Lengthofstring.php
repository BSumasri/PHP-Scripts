<html>
    <head>
        <title>Print String</title>
    </head>
    <body>
        <form method ='POST'>
            <input type="text" name="string"/>
            <button>Submit</button>
</form>
    </body>
</html>
<?php
$string =$_POST['string'];
for($i = 0;$i<=strlen($string);$i++)
{
    echo $string[$i]."<br/>";
}
?>