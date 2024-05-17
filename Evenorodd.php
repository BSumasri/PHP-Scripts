<html>
    <title>
     even or odd
    </title>
    <body>
        <form method ="POST">
            Enter a number:
            <input type ="number" name ="number">
            <input type="submit" value="submit"/>
        </form>
        <?php
         if ($_POST)
         {
            $number =$_POST['number'];
            if (($number%2)==0)
            {
                echo"$number is aeven number";
            }
             else
             {
                echo"$number is odd number";
             }
         }       
        ?>
        </body>
        </html>