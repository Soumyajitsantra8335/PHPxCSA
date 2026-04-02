<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Example</title>
    <link href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h3>Popover Postition</h3>
        <p>keep Mouse pointer oh the right links to see the popover in action:</p>
        <a href="#" title="Header" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Hare Krishna">Top</a>
        <a href="#" title="Header" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Krishna Krishna">Bottom</a>
        <a href="#" title="Header" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Hare Hare">Left</a>
        <a href="#" title="Header" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Hare Rama">Right</a>
</div>
<script>
    var popoverTriggerList=[].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList= popoverTriggerList.map(function(popoverTriggerEl){
        return new bootstrap.Popover(popoverTriggerEl)

    })
    </script>
</body>
</html>