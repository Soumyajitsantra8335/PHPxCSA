<?php
$connc=array_merge(range("a","z"),range("A","Z"),range(0,9));
$captcher="";

for($e = 1; $e < 6; $e++ ){
    $ch=$connc[array_rand($connc)];
    $captcher .= $ch;
    
}
echo $captcher;

?>