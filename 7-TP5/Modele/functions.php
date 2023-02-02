<?php
// Fonction pour ouvrir un fichier texte contenant les différentes places

function readFileToArray(string $filePath): array
{
    $listStag = file($filePath, FILE_IGNORE_NEW_LINES);

    return $listStag;
}

// Fonction pour mélanger les personnes afin de les changer de place

function randomizePlacesStag(array $listStagPlaces): array
{
    $values = array_values($listStagPlaces);
    $keys = array_keys($listStagPlaces);
    shuffle($values);
    $listStagPlaces = array_combine($keys, $values);


    return $listStagPlaces;
}

// Fonction création places
function insertPlace (array $places) {
    $place = array ();
    for ($i=0; $i <16 ; $i++) { 
        $place[$i] = "Place_".$i+1;
    }
    return $place;
}


function ListStageCSV($file) :void {

    $contain = file_get_contents($file);
    $tab = json_decode($contain, true);
    $csv = 'extraction_Stagiaire.csv';

    $key = array_keys($tab);
    $value = array_values($tab);

    for ($i=0; $i < count($tab) ; $i++) {
        $tabCsv[] = array($key[$i].' '. $value[$i]);
    }

    $i = 0;
    foreach ($tabCsv as $key) {
        $i++;
        $newTab[$i] = str_replace(" ", ";", $key);
    }

    $fileCsv = fopen($csv, 'w');

    foreach ($newTab as $i) {
        fputcsv($fileCsv, $i);
    }

    fclose($fileCsv);

}

function returnNom(array $listStagPlaces )  : array {


    $newTableau = $listStagPlaces;

    $places = array_keys($newTableau);
    $nomPrenom = array_values($newTableau);

    $nomPrenom = implode(' ', $nomPrenom);
    $separate = explode(' ', $nomPrenom);


        $prenoms = array();
        $noms = array();
        foreach($separate as $key => $val) {
    if($key % 2 == 0) {
        $noms[] = $val;
    } else {
        $prenoms[] = $val;
    }
}
    return $noms;
}


function returnPrenom(array $listStagPlaces )  : array {


    $newTableau = $listStagPlaces;

    $places = array_keys($newTableau);
    $nomPrenom = array_values($newTableau);

    $nomPrenom = implode(' ', $nomPrenom);
    $separate = explode(' ', $nomPrenom);


    $prenoms = array();
    $noms = array();
    foreach($separate as $key => $val) {
        if($key % 2 == 0) {
        $noms[] = $val;
        } else {
        $prenoms[] = $val;
        }
    }   
    
    return $prenoms;
}

function returnStag( ) : array {
    
$bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$reponse = $bdd->query('SELECT * FROM stagiaire');
  
$donnees = $reponse->fetchall();
      
return $donnees; 

$reponse->closeCursor();
} 
