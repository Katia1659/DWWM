<?php
include_once ('../modele/DBManagement.php');
include_once ('../modele/fonction.php');

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$nb_modifs = $bdd->exec("DELETE FROM `stagiaire` WHERE 16");

$listStag = readFileToArray($_FILES['file']['tmp_name']);

$listStag=  randomizePlacesStag($listStag);


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

$place = $listPlaces;

$nom = returnNom($listStag);

$prenom = returnPrenom($listStag);

for ($i = 0; $i < sizeof($listStag); $i++) {

    $tabNom = $nom[$i];
    $tabPrenom = $prenom[$i];
    $tabPlace = $place[$i];

    $tabStag = array($tabNom, $tabPrenom, $tabPlace);

    $status= insertStagiaires($tabStag);
}

if ($status) {
    echo "insert ok!!!";
} else {
    echo "insert KO!!!";
}

selectStag();




header('Location: ../view/select.php');
?>
