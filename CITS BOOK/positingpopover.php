<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstarp Example</title>
    <link href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h3>Popover Positing</h3>
        <p>Click on the links to see the popoverin action:</p>
        <p>popover on top and bottom</p>
        <br/><br/><br/><br/>
        <a href="#" title="Header" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Hare Krishna Hare Krishna">TOP</a>
        <a href="#" title="Header" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Krishna Krishna Hare Hare">Bottom</a>
</div>
<br/><br/><br/>
<div class="container mt-5">
    <h3>Popover Poisting</h3>
    <p>Click on the links to see the popoverin action:</p>
    <p>popover on left and right side</p>
    <a href="#" title="Header" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Hare Rama Hare Rama">Left</a>
    <a href="#" title="Header" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Rama Rama Hare Hare">Right</a>
</div>
<script>
    var popoverTriggerList=[].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList= popoverTriggerList.map(function(popoverTriggerEl){
        return new bootstrap.Popover(popoverTriggerEl)
    })
    </script>
</body>
</html>