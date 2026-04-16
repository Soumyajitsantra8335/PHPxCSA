<?php
$conn=new mysqli("localhost","root","","image");
$result=$conn->query("select * from upload2");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><center>UPLOAD FILE</center></h2>
    <br><br>

    <?php if (mysqli_num_rows($result)>0): ?>
        <table border="1" cellpadding="10" cellsspacing="0">
            <tr bg color="red">
                <th>ID</th>
                <th>Filename</th>
                <th>Action</th>
    </tr>
    <?php
    $sr_no=1;
    while($b=mysqli_fetch_assoc($result)):
        ?>

        <tr>
            <td><?php echo $sr_no++ ?></td>
            <td><?php echo $b ['path']; ?></td>
            <td>
                <a href="<?php echo $b['path']; ?>" target="_self">view</a>
                <a href="<?php echo $b['path']; ?>" download>Download</a>
    </td>
    </tr>
    <?php endwhile ?>
    </table>
    <? else: ?>
        <p> No files upload</p>
        <?php endif; ?>

</body>
</html>