<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap & flex example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Flex example</h1>
        <div class="d-flex">
            <div class="flex-grow-1 bg-primary p-3 mb-3">Flex item</div>
            <div class="bg-secondary p-3">Flex item 2</div>
</div>
<h2>Vertical Aligment</h2>
<div class="d-flex align-items-start mb-3">
            <div class="p-2 bg-info">Start aligned</div>
</div>
<div class="d-flex align-items-center mb-3">
            <div class="p-2 bg-success">Center aligned</div>
</div>
<div class="d-flex align-items-end">
            <div class="p-2 bg-warning">End aligned</div>
</div>
<h2>Horizontal Alignment</h2>
<div class="d-flex justify-content-start mb-3">
    <div class="p-2 bg-danger">Start aligned</div>
</div>
<div class="d-flex justify-content-center mb-3">
            <div class="p-2 bg-primary">Center aligned</div>
</div>
<div class="d-flex justify-content-end">
            <div class="p-2 bg-secondary">End aligned</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


    
</body>
</html>