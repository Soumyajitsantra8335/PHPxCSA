<?php
session_start();  
 $b=new mysqli("localhost","root","","registration");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $Username=$b->real_escape_string($_POST['username']);
    $Password=$_POST['Password'];
    $Enpassword=hash('md5',$Password);
  
   //$b->query("create database Registration");
   //$c="use Registration";
   //$b->query($c);
   //
   // $b->query("create table password (Username varchar(50), Enpassword varchar(500))");
   $b->query("insert into password values('$Username','$Enpassword')");
   //if($conn){
   // echo "Data Succesful Insertes";
   //}

   $soumo= "select * from password where Username='$Username' and Password='$Enpassword' ";
   $result=$b->query($soumo);

   if($result->num_rows == 1){
    $_SESSION['Username']=$Username;
    header('location: loginform3.php');
    exit();
   }else{
    echo "Invalid Username or password";
   }



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
    <h2>Login Form</h2>
    <form method="post">
    Username:
    <input name="username" placeholder="Enter your Username"><br>
    Password:
    <input name="Password" placeholder="Enter your Password"><br>
    <button>SUBMIT</button>
</form>
</body>
</html>