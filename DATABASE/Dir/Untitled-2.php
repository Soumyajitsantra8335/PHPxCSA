
<?php
session_start();
$b = new mysqli("localhost","root","","registration");
if ($b->connect_errno) {
    die("Connection failed: " . $b->connect_error);
}

if (!isset($_SESSION['captcha'])) {
    $_SESSION['captcha'] = rand(1000, 9999);
}

$message = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Username = $b->real_escape_string(trim($_POST['username'] ?? ''));
    $Password = trim($_POST['Password'] ?? '');
    $captcha_input = trim($_POST['captcha'] ?? '');

    if ($Username === '' || $Password === '') {
        $message = "Username aur password bharein.";
    } elseif ($captcha_input === '' || $captcha_input != $_SESSION['captcha']) {
        $message = "Captcha galat hai.";
    } else {
        $Enpassword = hash('md5', $Password);
        $soumo = "SELECT * FROM password WHERE Username='$Username' AND Enpassword='$Enpassword'";
        $result = $b->query($soumo);

        if ($result && $result->num_rows === 1) {
            $_SESSION['Username'] = $Username;
            header('Location: loginform3.php');
            exit();
        } else {
            $message = "Invalid Username ya Password.";
        }
    }

    $_SESSION['captcha'] = rand(1000, 9999);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
</head>
<body>
    <h2>Login Form</h2>
    <?php if ($message) echo "<p style='color:red;'>$message</p>"; ?>
    <form method="post">
        Username:<br>
        <input type="text" name="username" placeholder="Enter your Username"><br>
        Password:<br>
        <input type="password" name="Password" placeholder="Enter your Password"><br>
        Captcha:<br>
        <strong><?php echo $_SESSION['captcha']; ?></strong><br>
        <input type="text" name="captcha" placeholder="Enter Captcha"><br><br>
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>