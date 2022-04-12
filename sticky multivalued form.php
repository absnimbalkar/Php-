<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Survey</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">

Have you eaten Pizza before?
<input type="checkbox"  name="ch1"  value="Pizza" 
    <?php
    if(isset($_GET['ch1']) and  isset($_GET['s'])) echo"checked";?>> <br />

Have you eaten Burger before?
<input type="checkbox"  name="ch2"  value="Burger" 
    <?php
    if(isset($_GET['ch2']) and  isset($_GET['s'])) echo"checked";?>> <br />

<br>
<input type="submit"    name="s"    value="OK"/>
</form>
<?php
    if(isset($_GET['s']))
    {
    echo "You have eaten - ";
    if(isset($_GET['ch1'])) echo "$_GET[ch1]";
    if(isset($_GET['ch2'])) echo "$_GET[ch2]";
    if(isset($_GET['ch3'])) echo "$_GET[ch3]";
    
    }
?>    

</body>
</html>