<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    $First_Name=$_POST['first_name'];
    $Middle_Name=$_POST['middle_name'];
    $Last_Name=$_POST['last_name'];
    $Gender=$_POST['gender'];
    $Mobile_No=$_POST['mobile_no'];
    $Email=$_POST['email'];
    

    $soumo=new mysqli("localhost","root","","password");
    //$soumo->query("create table database1(First_Name varchar(50),Middle_Name varchar(50),Last_Name varchar(50),Gender varchar(100),Mobile_No bigint,Email varchar(100))");
    $conn=$soumo->query("insert into database1(First_Name,Middle_Name,Last_Name,Gender,Mobile_No,Email) values('$First_Name','$Middle_Name','$Last_Name','$Gender','$Mobile_No','$Email')");
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
            margin-left:700px;
            margin-right:700px;
            height:600px;
            border-radius:40px;
        }
        </style>

</head>
<body>
    <h3><center>REGISTRATION FORM</center></h3>
    <div class="container">
        <form method="POST">
    First Name:

    <input name="first_name" placeholder="Enter your First Name"><br><br>
    Middle Name:
    <input name="middle_name" placeholder="Enter Your Middle Name"><br><br>
    Last Name:
    <input name="last_name" placeholder="Enter Your Last Name"><br><br>
    Gender:
    <input type="radio" name="gender" value="Male">MALE
    <input type="radio" name="gender" value="Female">FEMALE
    <input type="radio" name="gender" value="Others">OTHERS<br><br>

    Mobile No:
    <input name="mobile_no" placeholder="Enter Your Mobile No"><br><br>
    Email:
    <input name="email" placeholder="Enter Your Email Address"><br><br>
    <button>SUBMIT</button>
    
</div>
</form>

    
</body>
</html>