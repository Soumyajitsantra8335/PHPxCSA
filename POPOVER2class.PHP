<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Popover without JavaScript</title>
    <style>
        /* Popover is a UI element that displays additional information or options to the user. */
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
    transform: translateX(-50%);
    background-color: #555;
    color: white;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    white-space: nowrap;
    z-index: 1;
}

/* Show popover when hovering over the trigger */
.popover-container:hover  .popover-content {
    display: block;
}
</style>


</head>
<body>

<?php
// PHP code for the popover content
$popoverContent = "Hello";
?>
<center>
<div class="popover-container">
    <label class="popover-trigger">Hover over me!</label>
    <div class="popover-content">
        <?php echo $popoverContent; ?>
    </div>     
    
</div>
</center>   
</body>
</html>
