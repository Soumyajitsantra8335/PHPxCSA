<?php
// PHP code to generate the spinner HTML and CSS
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP + CSS Spinner</title>
    <style>
        /* Spinner Container */
        .spinner {
            border: 4px solid rgb(34, 25, 104); /* Light grey */
            border-top: 4px solid #e74c3c; /* Blue */
            border-radius: 50%;
            width: 100px;
            height: 100px;
            animation: spin 1s linear infinite; /* Spinner animation */
            margin: 40px auto;
        }

        /* Spinner Animation */
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Center the spinner on the page */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f7f7f7;
        }
    </style>
</head>
<body>
    <div class="spinner"></div>
</body>
</html>
';
?>