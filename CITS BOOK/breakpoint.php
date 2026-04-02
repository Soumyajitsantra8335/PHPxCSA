<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsstrap Breakpoints</title>
    <!--Bootstrap CSS-->
    <link href=https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css rel="stylesheet">
    <style>
        /*Addtional custom styles*/
.custom-component{
    background-color: lightblue;
    padding: 20px;
    margin-bottom: 20px;
}
</style>
<!--Bootstrap JS (optional)-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <!--Component with default styling-->
        <div class="custom-component">
            Default Component styling
</div>
<!--Component with styling for extra small screens-->
<div class="custom-component bg-warning d-block d-sm-none">
Extra Small screen Component styling
</div>
<!--Components with styling for small screens-->
<div class="custom-component bg-danger d-none d-sm-block d-md-none">
    Small Screen component styling
</div>
<!--Components with styling for medium screens-->
<div class="custom-component bg-success d-none d-md-block d-lg-none">
    Medium Screen Component styling
</div>
<!--Component with styling for large screens-->
<div class="custom-component bg-info d-none d-lg-block d-xl-none">
    Large Screen Component styling
</div>
<!--Component with styling for extra large screens-->
<div class="custom-component bg-secondary d-none d-xl-block">
    Extra Large Screen Component Styling
</div>
</div>    
</body>
</html>