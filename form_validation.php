<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>

    <form name="form1" method="$_POST" action="form_validation.php">
        Your Name(Required):
    <input name="name" type="text">
    <br>
        Username(atleast 5 Char):
    <input type="send" type="submit" value="Submit">
    </form>
    
</body>
</html>

<?php
    if(isset($_POST['send']))
    {
        if(!empty($_POST['name']))
    
    {
        echo"Name:".$_POST['name']."<br />";
    }else
    {
        echo"Name is missing";
        echo"<br />";
    }
    if(!empty($_POST['username']))
    {
        if(strlen($_POST['username']) < 5)
        {
            echo"Username must be atleast 5 Char long";
            echo"<br/>";
        }
        else{
            echo"User Name:".$_POST['username'];
        }
        {
            echo"Username is missing";
            echo"<br />";
        }
    }
        else{
            echo"Unauthorized access to this page";
        }
    }
?>