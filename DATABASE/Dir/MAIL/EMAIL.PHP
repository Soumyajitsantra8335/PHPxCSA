<?php
$to="daniketb619@gmail.com";
$subject="SOUMYAJIT SANTRA";
$messege="this is email body HJKDFFHJKDHJKV";
$headers="From: soumosantra588@gmail.com";

if(mail($to,$subject,$messege,$headers)){
    echo "Mail sent successfully";

}else{
    echo "mail not sent";
}
?>