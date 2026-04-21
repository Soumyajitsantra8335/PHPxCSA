<?php
//max parameter
//setcookie(name, value, expiry, path, domain, secure, httponly);
//mini parameter
//setcookie(name, value);
//    Parameter     	Description
//   	name	      Name of the cookie
//   	value	      Value of the cookie
//   	expiry	      Time duration for which the cookie will exist
//   	path	      Specifies where the cookie is accessible on 
//                    the website
//   	domain	      Specifies the domain for which the cookie is
//                    valid
//   	secure	      Cookie will work only over HTTPS
//   	httponly	  Prevents JavaScript from accessing the cookie
setcookie("user", "Rahul Kumar");


$expiry_time = time() + (7 * 24 * 60 * 60); // 7 days * 24 hours * 60 minutes * 60 seconds
setcookie("preferences", "dark_theme", $expiry_time, "/");

// Cookie with all parameters
setcookie("language", "hindi", time() + (30 * 24 * 60 * 60), "/", "example.com", true, true);

// HTML content
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Cookies Example</title>
</head>
<body>
    <h1>Cookies Set Successfully!</h1>
    <p><a href="read_cookie.php">Read Cookies</a></p>
</body>
</html>
<?php
//  read cookies
$user = $_COOKIE['user'] ?? 'Not set';
$preferences = $_COOKIE['preferences'] ?? 'Not set';
$language = $_COOKIE['language'] ?? 'Not set';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Read Cookies</title>
</head>
<body>
    <h1>Stored Cookies:</h1>
    <p>User: <?php echo htmlspecialchars($user); ?></p>
    <p>Preferences: <?php echo htmlspecialchars($preferences); ?></p>
    <p>Language: <?php echo htmlspecialchars($language); ?></p>
    
    <p><a href="delete_cookie.php">Delete Cookies</a></p>
</body>
</html>