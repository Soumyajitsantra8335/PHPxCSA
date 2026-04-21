<?php
// Set cookies
setcookie("soumo", "soumyajit santra", time() + 3600); // 1 hour
setcookie("preferences", "dark_theme", time() + 43200, "/"); // 12 hours
setcookie("language", "bengali", time() + 3600); // 1 hour
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Set Cookies</title>
</head>
<body>

<h2>Cookies set successfully!</h2>

<p><a href="read_cookie.php">Read Cookies</a></p>

</body>
</html>
<?php
// Read cookies
$user = $_COOKIE['soumo'] ?? 'Not Set';
$preferences = $_COOKIE['preferences'] ?? 'Not Set';
$language = $_COOKIE['language'] ?? 'Not Set';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Read Cookies</title>
</head>
<body>

<h1>Stored Cookies:</h1>

<p><strong>User:</strong> <?php echo htmlspecialchars($user); ?></p>
<p><strong>Preferences:</strong> <?php echo htmlspecialchars($preferences); ?></p>
<p><strong>Language:</strong> <?php echo htmlspecialchars($language); ?></p>

<p><a href="delete_cookie.php">Delete Cookies</a></p>

</body>
</html><?php
// Delete cookies
setcookie("soumo", "", time() - 3600);
setcookie("preferences", "", time() - 3600);
setcookie("language", "", time() - 3600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Cookies</title>
</head>
<body>

<h2>Cookies Deleted Successfully!</h2>

<p><a href="set_cookie.php">Set Cookies Again</a></p>

</body>
</html>