<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Popover without JavaScript</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
          $popoverContent="This is simple popover massage !";
    ?>
<center>
    <div class="popover">
        <span class="popover-trigger">Hover over me !</span>
             <div id="popover-content">
                <?php echo $popoverContent; ?>
             </div>
    </div>
</center> 
</body>
</html>  