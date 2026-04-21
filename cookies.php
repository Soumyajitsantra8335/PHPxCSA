<?php
setcookie("soumo","soumyajit santra");
$expiry_time=time() + (1 * 12 * 60 * 60);
setcookie("preferences","dark_theme", $expiry_time, "/");

setcookie("language","bengali", time() + (1 * 1 * 60 * 60), "/","ecample.com", true, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cookies set successfully!</h1>
    <p><a href="read_cookie.php">Read Cookies</a></p>
</body>
</html>
<?php
$user= $_COOKIE['user'] ?? 'Not Set';
$preferences =  $_COOKIE['preferences'] ?? 'Not set';
$language =  $_COOKIE['language'] ?? 'Not set';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Stored Cookoes:</h1>
    <p>USER: <?php echo htmlspecialchars($user); ?></p>
    <p>preferences: <?php echo htmlspecialchars($preferences); ?></p>
    <p>Language: <?php echo htmlspecialchars($language); ?></p>

    <p><a href="delete_cookie.php">Delete cookies</a></p>
</body>
</html>


