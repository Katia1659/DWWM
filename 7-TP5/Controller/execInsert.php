<?php
include '../Modele/DBManagement.php';

session_start();
$file= 'Liste.txt';
// $file=$_FILES['file']["tmp_name"];


function readData( String $file): array {
    $fileArray = readFileToArray($file);

$i=0;
foreach ($fileArray as $key => $value) {
   $tab[$i]=explode(' ',$value);
   $i++;
}
return $tab;
}

var_dump(readData ($file));