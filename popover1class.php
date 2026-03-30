<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Popover without JavaScript</title>
    <style>
        /* Basic styling for popover */
        .popover-container {
            position: relative;
            display: inline-block;
        }

        .popover-trigger {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        /* Popover content (hidden by default) */
        .popover-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);  /* Centers the popover */
            background-color: #555;
            color: white;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            white-space: nowrap;
            z-index: 1;
            width: max-content;  /* Ensure content size adapts */
            min-width: 100px; /* Minimum width to avoid clipping */
        }

        /* Show popover when hovering over the trigger */
        .popover-container:hover .popover-content {
            display: block;
        }

        /* Optional: Adjust positioning if the popover is near the edge */
        @media (max-width: 500px) {
            .popover-content {
                left: 0;
                transform: translateX(0); /* Avoid clipping on small screens */
            }
        }
    </style>
</head>
<body>

<?php
// PHP code for the popover content
$popoverContent = "This is a simple popover message!";
?>

<div class="popover-container">
    <span class="popover-trigger">Hover over me!</span>
    <div class="popover-content">
        <?php echo $popoverContent; ?>
    </div>
</div>

</body>
</html>
