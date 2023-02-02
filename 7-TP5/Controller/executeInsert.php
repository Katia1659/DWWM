<?php
include "../Modele/DBManagement.php";
require ('../Modele/functions.php');
session_start();
$listPlaces = array(
    'Place_1',
    'Place_2',
    'Place_3',
    'Place_4',
    'Place_5',
    'Place_6',
    'Place_7',
    'Place_8',
    'Place_9',
    'Place_10',
    'Place_11',
    'Place_12',
    'Place_13',
    'Place_14',
    'Place_15',
    'Place_16'
);

$listStagPlaces = readFileToArray($_FILES['file']['tmp_name']);
$place = $listPlaces;


$tabPrenom = returnPrenom ($listStagPlaces);
$tabNom = returnNom($listStagPlaces);
$status = deleteALL();
for ($i=0; $i < sizeof($tabNom); $i++) { 
    $nom = $tabNom[$i];
    $prenom = $tabPrenom[$i];
    $place = $listPlaces[$i];
    $tabFinal = array ($nom,$prenom,$place);
    $status = insertStagiaires($tabFinal);
}
     

    
if ($status) {
    
        echo "insert ok!!!";
        header('Location: ../View/index.html');
    } else {
        echo "insert KO!!!";
    }







?>