<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No. of times web page been accessed</title>
</head>
<body>
    <form method="GET" action="counter.php">
    Enter your name <input type="text" value="name"><br>
    Enter your email address <input type="text" value="email address"><br>
    Enter your phone number <input type="text" value="phn no."><br>
    <input type="submit" value="submit"></input>
    </form>
    
</body>
</html>

<?php
    session_start();
    if(isset($_SESSION['cnt']))
    {
        $_SESSION['cnt']+=1;
        echo"You have visited this page".$_SESSION['cnt']."times";
    }
    else
    {
        $_SESSION['cnt']=1;
        echo"You have visited this page".$_SESSION['cnt']."times";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <a href="counter.php">Refresh</a>
</body>
</html>    