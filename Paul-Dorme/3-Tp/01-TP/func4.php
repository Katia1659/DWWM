<?php 

//Fonction à réaliser :
// function saveListStagToFile(array [k,v] $listStagPlaces): void;


include 'func3.php';

function saveListStagToFile(array $newPlacesStag) : void{

// Prend la date du moment d'enregistrement du fichier
$date = date('d-m-Y _ H-i-s');

// Vérification si le fichier existe
if (!file_exists('TP-1')) {
 mkdir('TP-1');
}

$info = "";

// 
foreach ($newPlacesStag as $key => $value) {
    $info .= $key.'=>'.$value."\n"; 
}

// Créer et remplit un nouveau fichier.txt avec le nouveau mélange
file_put_contents("backup_$date.txt", $info,FILE_APPEND | LOCK_EX);

}

// Appel de la fonction
saveListStagToFile($newPlacesStag);