<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        Select File:
        <input type="file" name="filetoupload"/>
        <input type="submit" value="Upload Image" name="submit"/>
    </form>
    
</body>
</html>

<?php
    $target_path = "E:/";
    $target_path =$target_path.basename($_FILES['fileToUpload']['name']);
    
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_path))
    {
        echo"File Uploaded Succesfully";
    }else{
        echo"Sorry,File not uploaded,please try again!";
    }
    ?>