<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap & poisting</title>
    <!--Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h2>Positioning Example</h2>
                <p>This is a simple example demonstrating how to use Bootstrap v5 classes for poisting element.</p>
                <div class="position-relative bg-light p-3 mb-3">
                    <div class="position-absolute top-0 start-0 bg-primary p-2">
                        Top left
</div>
<div class="position-absolute top-0 end-0 bg-success p-2">
    Top right
</div>
</div>
<div class="position-relative">
    <img src="RADHA.jpg"  alt="image" class="img-fluid w-100" >
    <div class="position-absolute top-0 start-50 translate-middle-x bg-info p-2">
        Center Top
    </div>
    <div class="position-absolute bottom-0 start-50 translate-middle-x bg-secondary p-2">
        Center bottom
</div>
</div>
<div class="position-relative bg-light p-3 mb-3">
    <div class="position-absolute bottom-0 start-0 bg-warning p-2">
        Bottom left
</div>
<div class="position-absolute bottom-0 end-0 bg-danger p-2">Bottom Right</div>
</div>
</div>
</div>
</div>
<!--bootstrap Bundle with proper-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    
</body>
</html>