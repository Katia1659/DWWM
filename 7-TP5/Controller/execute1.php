<?php
include_once ("../Modele/DBManagement.php");
include_once ("../Modele/functions.php");

$listStag = readFileToArray($_FILES['file']['tmp_name']);



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




$place= $listPlaces;

$nom = insertnom($listStag);

$prenom = insertprenom($listStag);



for ($i=0; $i <sizeof($listStag) ; $i++) { 
    
    $tabNom = $nom[$i];
    $tabPrenom = $prenom[$i];
    $tabPlace = $place[$i];

    $tabStag = array($tabNom ,$tabPrenom ,$tabPlace);

    $status = insertStagiaires($tabStag);
}

if ($status) {
    echo "ok!!!";
} else {
    echo "KO!!!";
}