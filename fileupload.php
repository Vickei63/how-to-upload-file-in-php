<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="fileupload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" value="File Upload"><br><br>
        <input type="submit" name="submit" value="Submit">

    </form>
</body>
</html>

<?php 
    if(isset($_POST["submit"])){
        $filename = $_FILES["file"]["name"];
        $templocation = $_FILES["file"]["tmp_name"];
        $targetedfolder = "images/";

        move_uploaded_file($templocation,$targetedfolder.$filename);

    }

?>