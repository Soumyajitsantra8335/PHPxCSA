<?php
$CONN=array_merge(range("a","x"),range("A","X"),range(0,9));
$captarch="";
//print_r ($CONN);
for($d=1; $d <= 6; $d++){
    $result=$CONN[array_rand($CONN)];
    $captarch .=$result;
}

$msg="";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $data=$_POST['a'];
    $data1=$_POST['b'];
    global $captarch;
    if($data==$data1){
        $msg="<span class='success'>connect Captarch</span>";
    }else{
        $msg="<span class='error'>Wrong Captarch</span>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

     
</head>
<body>
    <form action="#" method="post">
        <lable><center>SOLVE THE CAPTCH</center></lable>
        <div class="captch-box">
            <div class="captch-text"><?php echo $captarch; ?>
            <input type="text" name="a" required placeholder="Enter Captch">
</div>
<input type="hidden" name="b" value="<?php echo $captarch ?>">
<button type="submit">verify</button>
<div class="messege"><?php echo $msg; ?></div>

</form>


</body>
</html>
