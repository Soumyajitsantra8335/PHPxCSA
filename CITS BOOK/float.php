
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap & Floats Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .float-start{
            float:left;
        }
        .float-end{
            float:right;
        }
        </style>
</head>
<body>
    <div class="container mt-3">
        <h1>Flaots Example</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="bg-primary p-3 mb-3">
                <p>This is content float left.</p>
                <p class="float-start">Floted left content</p>
                <p class="float-start">Another floated left content</p>
</div>
</div>
<div class="col-md-6">
    <div class="bg-secondary p-3 mb-3">
        <p>This is content fliated right.</p>
        <p class="float-end">Floated rght content.</p>
        <p class="float-end">Another floated right content</p>
</div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
