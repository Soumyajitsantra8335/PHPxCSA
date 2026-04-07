<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    $First_Name=$_POST['first_name'];
    $Middle_Name=$_POST['middle_name'];
    $Last_Name=$_POST['last_name'];
    $Mobile_No=$_POST['mobile_no'];
    $Email=$_POST['email'];
    $Username=$_POST['username'];
    $Password=$_POST['password'];

    $Enpassword=hash('md5',$Password);

    $soumo=new mysqli("localhost","root","","password");
    //$soumo->query("create table reg(First_Name varchar(50),Middle_Name varchar(50),Last_Name varchar(50),Mobile_No bigint,Email varchar(100),Username varchar(100),Enpassword varchar(1000))");
    $conn=$soumo->query("insert into reg values('$First_Name','$Middle_Name','$Last_Name','$Mobile_No','$Email','$Username','$Enpassword')");
    if($conn){
        echo "Data Successful Inserted";
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION FROM</title>
    <style>
        .container{
            background-color:lightgreen;
            padding:40px;
            text-align:center;
        }
        </style>

</head>
<body>
    <h3><center>REGISTRATION FORM</center></h3>
    <div class="container">
        <form method="POST">
    First Name:

    <input name="first_name" placeholder="Enter your First Name"><br>
    Middle Name:
    <input name="middle_name" placeholder="Enter Your Middle Name"><br>
    Last Name:
    <input name="last_name" placeholder="Enter Your Last Name"><br>
    Mobile No:
    <input name="mobile_no" placeholder="Enter Your Mobile No"><br>
    Email:
    <input name="email" placeholder="Enter Your Email Address"><br>
    Username:
    <input name="username" placeholder="Enter Your User Name"><br>
    Password:
    <input name="password" placeholder="Enter Your Password"><br><br>
    <button>SUBMIT</button>
</div>
</form>

    
</body>
</html>