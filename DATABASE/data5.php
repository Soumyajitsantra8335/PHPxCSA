<?php
$a=new mysqli("localhost","root","","soumo");
//$a->query("create database soumo");
//$b="use soumo";
//$a->query($b);
$a->query("create table stu(Roll_No int,Name varchar(50),Address varchar(100))")
?>