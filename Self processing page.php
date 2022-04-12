<!-- Program for Self Processing Page  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greet User</title>
</head>
<body>
    <?php 
        if(isset($_GET['name1']))
        {
            $nm=$_GET['name1'];
            echo"Hello".$nm;
        }   else{
            ?>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
            Enter your name:
            <input type="text" name="name1" /> <br/>
            <input type="submit" name="OK" /> <br/>
            </form>
            <?php
        }
         ?>   
</body>
</html>