<?php


// fonction lisant un fichier et le mettant en format tableau
function readFileToArray (string $filePath) : array  {
    $fichier = file($filePath, FILE_IGNORE_NEW_LINES);
    return $fichier;
}


// fonction combinant deux tableaux
function generateStagPlaces( array $listPlaces, array $listStag) : array {
    $tabPlaceNom = array_combine ( $listPlaces, $listStag);
    return $tabPlaceNom;
}

// fonction changeant aléatoirement les valeurs aux clés du tableau


function randomizePlacesStag(array $listStagePlaces): array {
    $temp = array();
    $temp = array_values($listStagePlaces);
    shuffle($temp);
    
    $randomPlaces = array_combine(array_keys($listStagePlaces), $temp);
    return $randomPlaces;
}



// fonction passant un fichier texte au format json

function saveListStagToJson(array $listStagPlaces ): void {
    date_default_timezone_set('Europe/Paris');
    $date = date('j-m-y H-i-s');
    if (!is_dir('save')) {
        mkdir('save');
    }
    $fichier = 'save\Backup.json';
    $json = json_encode($listStagPlaces);
    file_put_contents($fichier, $json);

}


// fonction décalant les valeurs d'un tableau de 1 

function placesStagRotate(string $listStagPlaces) : array  {
    $json = file_get_contents($listStagPlaces); 
    $listStagPlaces = json_decode($json, true);
    $cle = array_keys($listStagPlaces);
    $valeur = array_values($listStagPlaces);
    $lastValue = array_pop($valeur);
    array_unshift($valeur, $lastValue);
    $listStagPlaces= array_combine($cle, $valeur);
    $saveJson = json_encode($listStagPlaces, true);
    file_put_contents('./save/Backup.json', $saveJson);
    return $listStagPlaces;   
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




?>