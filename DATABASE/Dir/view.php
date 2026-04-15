<?php
//VIEW
$conn=new mysqli("localhost","root","","image");
$result=$conn->query("select * from upload");





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Uploaded Files</title>
</head>
<body>
    <h2>upload file view</h2>
    <br><br>

    <?php if(mysqli_num_rows($result)>0): ?>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr bg color="blue">
                <th>Id</th>
                <th>File name</th>
                <th>Action</th>
    </tr>
    <?php
    $sr_no = 1;
    while($b = mysqli_fetch_assoc($result)):
    ?>
    <tr>
        <td><?php echo $sr_no++; ?></td>
        <td><?php echo $b ['File_Path']; ?></td>
        <td>
            <a href="<?php echo $b['File_Path']; ?>" target="_self">view</a>
            <a href="<?php echo $b['File_Path']; ?>" download>download</a>
    </td>
    </tr>
    <?php endwhile; ?>
    </table>
    <? else: ?>
    <p>No files uploaded</p>
    <?php endif; ?>


    
</body>
</html>