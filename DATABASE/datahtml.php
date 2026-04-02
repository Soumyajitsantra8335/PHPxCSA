<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML & PHP CONNECT</title>
</head>
<body>
    <form method="post">
        Roll_No:
        <input name="id" placeholder="Enter Your Roll no"><br>
        Name:
        <input name="Name" Placeholder="Enter Your name"><br>
        Address:
        <input name="Address" Placeholder="Enter Your address"><br>
        <button>Submit</button>
</form>
<?php
$conn=new mysqli("localhost","root","","soumo");
if($conn){
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $Roll_No=$_POST['id'];
        $Name=$_POST['Name'];
        $Address=$_POST['Address'];
        $a=$conn->query("insert into stu values('$Roll_No','$Name','$Address')");
        if($a){
            echo "Data inserted Successfully";
        }
    }
}
?>

    
</body>
</html>