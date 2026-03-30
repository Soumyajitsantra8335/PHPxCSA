<!DOCTYPE html>
<html>
<head>
  <title>PHP Progress Bar</title>
</head>
<body>

<h3>Progress Example</h3>

<button onclick="startProgress()">Start</button>

<div style="width: 100%; background: #ddd; margin-top:10px;">
  <div id="bar" style="width:0%; height:30px; background:green;"></div>
</div>

<p id="percent">0%</p>

<script>
function startProgress() {
  var width = 0;
  var interval = setInterval(function() {
    if (width >= 50) {
      clearInterval(interval);
    } else {
      width++;
      document.getElementById("bar").style.width = width + "%";
      document.getElementById("percent").innerText = width + "%";
    }
  }, 100); // speed
}
</script>

</body>
</html>