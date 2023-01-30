<?php
include "../Modele/DBManagement.php";
include "../Modele/functions.php";

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


$filePath = 'Liste.txt';
$listStag = readFileToArray($filePath);

$tabCompiled = generateStagPlaces($listPlaces,$listStag);




$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$place = $_GET['place'];

// readFileToArray('Liste.txt');

$tabStag = array($nom ,$prenom ,$place);

$status = insertStagiaires($tabStag);

if ($status) {
    echo "insert ok!!!";
} else {
    echo "insert KO!!!";
}

?>