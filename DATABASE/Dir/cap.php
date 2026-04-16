<?php
$arr=array_merge(range("a","z"),range("A","Z"),range(0,9));

$capter="";
print_r($arr);

for($i = 1; $i <= 6; $i++){
    $ch=$arr[array_rand($arr)];
    $capter .= $ch;

}
echo $capter;
?>