<?php
echo "<h2> PHp file handling Complete Enmortation.</h2>";
$dirname="Soumo_Data";
$filename=$dirname . "/sunny_file.txt";

//create Directory

echo "<h3> create directory </h3>";
if(!is_dir($dirname)){
    mkdir($dirname,0777,true);
    echo "Drectory created: $dirname <br>";
}else{
    echo "Directory Already Exists : $dirname <br>";

}
.


?>
