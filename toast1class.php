<?php
// Start the session to store toast messages between page loads
session_start();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process form data here (add your validation logic)
    $success = true; // Assume submission is successful for this demo
    
    // Store toast message in session
    $_SESSION['toast_message'] = $success 
        ? 'Submitted successfully!' 
        : 'Error: Submission failed!';
    $_SESSION['toast_type'] = $success ? 'success' : 'error';
    
    // Use Post/Redirect/Get pattern to prevent form resubmission
    header('Location: '.$_SERVER['PHP_SELF']);
    exit();
}

// Retrieve toast message from session and then clear it
$toast_message = $_SESSION['toast_message'] ?? null;
$toast_type = $_SESSION['toast_type'] ?? '';
unset($_SESSION['toast_message'], $_SESSION['toast_type']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toast Notification Example</title>
    <style>
        /* Toast notification styling */
        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
        }
        .toast {
            padding: 15px 25px;
            margin-bottom: 10px;
            border-radius: 4px;
            color: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            animation: slideIn 0.5s forwards, fadeOut 0.5s 2.5s forwards;
        }
        .success { background-color: #28a745; } /* Green */
        .error { background-color: #dc3545; }   /* Red */
        
        /* Animation for toast entry */
        @keyframes slideIn {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        /* Animation for toast exit */
        @keyframes fadeOut {
            to { opacity: 0; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Submission Example</h1>
        
        <!-- Toast Notification -->
        <?php if ($toast_message): ?>
        <div class="toast-container">
            <div class="toast <?php echo $toast_type; ?>">
                <?php echo htmlspecialchars($toast_message); ?>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- Simple Form -->
        <form method="POST" action="">
            <div style="margin: 20px 0;">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>