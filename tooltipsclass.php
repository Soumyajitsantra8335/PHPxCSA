<?php
// Tooltip text (dynamic)
$tooltip = "This is a PHP tooltip message!";
?>

<!DOCTYPE html>
<html>
<head>
<style>
.tooltip {
  position: relative;
  display: inline-block;
  cursor: pointer;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 180px;
  background-color: black;
  color: #fff;
  text-align: center;
  padding: 5px;
  border-radius: 5px;

  position: absolute;
  bottom: 125%;
  left: 50%;
  transform: translateX(-50%);
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}
</style>
</head>
<body>

<h3>Hover below 👇</h3>

<div class="tooltip">
  Hover me
  <span class="tooltiptext">
    <?php echo $tooltip; ?>
  </span>
</div>

</body>
</html>