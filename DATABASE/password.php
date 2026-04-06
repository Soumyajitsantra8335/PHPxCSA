
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Name:
    <input name="name" placeholder="Enter Your Name"><br>
    Email:
    <input name="Email" Placeholder="Enter Your Email"><br>
    Username:
    <input name="Username" Placeholder="Enter Your Username"><br>
    Enpassword:
    <input name="Enpassword" placeholser="Enter Your Enpassword"><br>
    <button>SUBMIT</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $Name=$_POST["name"];
    $Email=$_POST["Email"];
    $Username=$_POST["Username"];    
    $Enpassword=$_POST["Enpassword"];
    $Password=hash('SHA256',$Enpassword);
    echo "$Password";
    $a=new mysqli("localhost","root","","test");
    $a->query("insert into santra values('$Name','$Email','$Username','$Password')");
}

?>

    
</body>
</html>