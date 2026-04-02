<?php
session_start();

// Initialize progress if not set
if (!isset($_SESSION['progress'])) {
    $_SESSION['progress'] = 0;
}

// Simulate a long-running task
if ($_SESSION['progress'] < 100) {
    $_SESSION['progress'] += 10; // Increment progress by 10%
    usleep(500000); // Simulate a delay (0.5 seconds)
}

// Output the progress bar
$progress = $_SESSION['progress'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1;url=<?php echo $_SERVER['PHP_SELF']; ?>">
    <title>Progress Bar</title>
    <style>
        .progress-container {
            width: 100%;
            background-color: #f3f3f3;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .progress-bar {
            width: <?php echo $progress; ?>%;
            height: 30px;
            background-color:rgb(76, 86, 175);
            text-align: center;
            line-height: 30px;
            color: white;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Progress Bar</h1>
    <div class="progress-container">
        <div class="progress-bar"><?php echo $progress; ?>%</div>
    </div>
    <?php if ($progress >= 100): ?>
        <p>Task complete!</p>
        <?php session_destroy(); ?>
    <?php endif; ?>
</body>
</html>