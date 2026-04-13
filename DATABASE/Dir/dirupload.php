<?php
$conn=new mysqli("localhost","root","","image");

if($_SERVER['REQUEST_METHOD']=="POST"){
    $file_Name=$_FILES['file']['name'];
    $file_tmp=$_FILES['file']['tmp_name'];
    $file_path="Soumo_Data/" . $file_Name;

    move_uploaded_file($file_tmp,$file_path);
    mysqli_query($conn,"insert into upload(file_Name,file_Path)values('$file_Name','$file_path')");
    echo "image upload successfully";

}
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <input type="submit" value="upload">
</form>
    
</body>
</html>