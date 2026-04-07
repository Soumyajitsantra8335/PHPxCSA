<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $username=$_POST['Username'];
    $Password=$_POST['password'];
    $enpassword=hash("md5",$Password);
    $a=new mysqli("localhost","root","","soumo");
    //$a->query("create table password(Username varchar(50), enpassword varchar(50))");
$conn=$a->query("insert into password(Username,enpassword) values('$username','$enpassword')");
//$result=$conn->query("select * from password where Username='$username'");

if($conn){
    header('location: loginform3.php');
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            background-color:lightblue;
            padding:30px;
            text-align:center;
            margin-left:700px;
            margin-right:700px;
            height:350px;
            border-radius:40px;
}
</style>
</head>
<body>
    <h2><center>LOGIN FROM</center></h2>
    <form method="post"><div class="container">
        <p style="font-size:30px">Username<br></p>
        <input name="Username" placeholder="Place Enter Username"><br><br>
        <p style="font-size:30px">Password<br>
        <input name="password" placeholder="Enter Your Password"><br><br>
        <button style="font-size:30px;">submit</button>
</body>
</html>