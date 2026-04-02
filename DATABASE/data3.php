<?php
$a=new mysqli("localhost","root");
//$a->query("create database hello");
$b="use hello";
$a->query($b);
$a->query("create table student(id int, name varchar(50),address varchar(50))");
?>