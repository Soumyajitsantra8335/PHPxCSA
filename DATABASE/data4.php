<?php
$a=new mysqli("localhost","root","","hello");
//$a->query('insert into student values(1,"soumo","bahirtafa")');
//$a->query('insert into student values(2,"sribas","howrah")');
//$a->query('insert into student values(3,"namita","rahamoni")');
$a->query('delete from student where id between 2 and 2');
?>