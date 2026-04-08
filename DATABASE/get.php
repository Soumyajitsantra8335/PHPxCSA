<?php
$conn=new mysqli("localhost","root","","sribas");
$result=$conn->query('select * from open');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
</tr>
<?php

if($result->num_rows > 0){
    while($a=$result->fetch_assoc()){
        ?>
    <tr>
        <td><?php echo $a['id'] ?></td>
        <td><?php echo $a['Name'] ?></td>
        <td><?php echo $a['Addres'] ?></td>
</tr>

<?php
    }
}else{
    echo "Data not folund";
}
?>

</body>
</html>
