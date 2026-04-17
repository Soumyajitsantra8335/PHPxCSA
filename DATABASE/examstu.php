<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $Name=$_POST["name"];
    $Email=$_POST["email"];
    $Mobile=$_POST["mobile"];
    $Password=$_POST["password"];
    if($Password){
        echo $Password;
    }
    $Enpassword=hash("md5",$Password);

    $a=new mysqli("localhost","root","","exam1");
    //$a->query("create database exam1");
    //$conn=$a->query("create table reg(Name varchar(100),Email varchar(100),Mobile_No bigint,Enpassword varchar(1000))");
    
    $a->query("insert into reg(Name,Email,Mobile_No,Enpassword)values('$Name','$Email','$Mobile','$Enpassword')");


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
            background-color:yellow;
            padding:30px;
            text-align:center;
            margin-left:700px;
            margin-right:700px;
            top: 200px;
            buttom: 200px;
            height:300px;
            border-radius:60px;
        

        }
        </style>
</head>
<body bgcolor="lightblue">
    <h2><center>STUDENT REGISTRATION FORM</center></h2>
    
    <form method="post"><div class="container">
    Name:
    <input name="name" placeholder="Enter Your Name"><br><br>
    Email:
    <input name="email" placeholder="Enter Your Email"><br><br>
     Mobile_No:
    <input name="mobile" placeholder="Enter Your Mobile Number"><br><br>
    Password:
    <input name="password" placeholder="Enter Your Password"><br><br>
    <button>SUBMIT</button>
</form>

</body>
</html>