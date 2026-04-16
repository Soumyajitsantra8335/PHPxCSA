<?php
$conn=new mysqli("localhost","root","","image");

if($_SERVER['REQUEST_METHOD']=="POST"){
    $filename=$_FILES['file']['name'];
    $filetmp=$_FILES['file']['tmp_name'];
    $filepath="soumyajit_data/".$filename;

    move_uploaded_file($filetmp,$filepath);
    $a=$conn->query("insert into upload2(name,path) values ('$filename','$filepath')");
    if($a){
        echo "file upload successful";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <input type="submit" value="upload">
</formn>







    
</body>
</html>