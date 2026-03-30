<!DOCTYPE html>
<html>
<body style="text-align:center; margin-top:100px;">

<h2>PHP Popover Easy</h2>

<form method="post">
    <button name="Click">Click</button>
</form>

<?php
if(isset($_POST["Click"]))
{
    echo "<div style='display:block; border:1px solid black; width:200px; margin:auto; padding:10px;'>
            Hare Krishna
          </div>";
}
?>

</body>
</html>