<?php
$server="localhost";
$username="root";
$conn=new mysqli($server, $username);
if($conn){
    echo "Submitted Successfully";
}
?>
