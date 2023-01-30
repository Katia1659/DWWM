<?php
include('../Modele/functions.php');
include "../Modele/DBManagement.php";

$list = '../Modele/Liste.txt';
$stagiaires = file($list, FILE_IGNORE_NEW_LINES);
print_r($stagiaires);


$places = array();
for ($i=0; $i < 16 ; $i++) {
    $p = $i + 1;
    $places[$i] = "Place_$p";
}
print_r($places);

for ($i=0; $i <count($places) ; $i++) { 
    $stagiaires[$i] = $stagiaires[$i]." $places[$i]";
}

print_r($stagiaires);

 insertStagiaires($stagiaires);
