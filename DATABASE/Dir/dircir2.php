<?php
$dirname="soumyajit_data";
$filename= $dirname . "/text_file.txt";

if(!is_dir($dirname)){
    mkdir($dirname, 0777, true);
    echo "Directory created";
}else{
    echo "Directory already Exits";
}

?>