
<?php
session_start();
$b = new mysqli("localhost","root","","registration");

if (!isset($_SESSION['captcha'])) {
    $_SESSION['captcha'] = rand(1000, 9999);
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Username = $b->real_escape_string($_POST['username']);
    $Password = $_POST['Password'];
    $Enpassword = hash('md5', $Password);

    if (empty($_POST['captcha']) || $_POST['captcha'] != $_SESSION['captcha']) {
        echo "Captcha wrong, dobara try karein.";
    } else {
        $b->query("insert into password values('$Username','$Enpassword')");

        $soumo = "select * from password where Username='$Username' and Enpassword='$Enpassword'";
        $result = $b->query($soumo);

        if ($result->num_rows == 1) {
            $_SESSION['Username'] = $Username;
            header('location: loginform3.php');
            exit();
        } else {
            echo "Invalid Username or password";
        }
    }

    $_SESSION['captcha'] = rand(1000, 9999);
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
        Captcha:
        <strong><?php echo $_SESSION['captcha']; ?></strong><br>
        <input name="captcha" placeholder="Enter Captcha"><br>
        <button>SUBMIT</button>
    </form>
</body>
</html>