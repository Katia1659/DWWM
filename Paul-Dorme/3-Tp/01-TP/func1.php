<?php 

// Fonction à réaliser :
// function readFileToArray($filePath) : array [];


function readFileToArray(String $filePath) {
    
    $listStag=file($filePath);
    return $listStag;
}

// Met le fichier.txt dans un tableau
$listStag = readFileToArray('listStag.txt');
print_r($listStag);


