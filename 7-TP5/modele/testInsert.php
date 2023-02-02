<?php

//================================================ FONCTION 1 ===============================================================

$file = '../Liste.txt';
$postes = array ('place_1', 'place_2', 'place_3', 'place_4', 'place_5', 'place_6', 'place_7', 'place_8', 'place_9', 'place_10', 'place_11', 'place_12', 'place_13', 'place_14', 'place_15', 'place_16',);


//fonction pour lire le fichier

function readFileToArray(string $filePath) : array {
    $nom = file($filePath,FILE_IGNORE_NEW_LINES);
    return $nom;
}

$table = readFileToArray($file);

//================================================ FONCTION 2 ===============================================================

//fonction pour créer le tableau associatif

function generateStagPlaces(array $listPlaces, array $listStag) : array {   

    $combine = array_combine($listPlaces,$listStag);
    return $combine;

    
}  

$table = generateStagPlaces($postes, $table);

//================================================ FONCTION 3 ===============================================================

//fonction pour faire tableau multidimensionnel

function generateMulti(array $listStagPlaces): array{
    $table = [];
    $listStagPlaces = preg_replace("/\s+/", ",",$listStagPlaces);
    foreach ($listStagPlaces as $key => $value) {
        $line = $value. ",". $key;
        $table[] = explode(",",$line);
    }
    return $table;
}

$table = generateMulti($table);

print_r($table);


//================================================ FONCTION 4 ===============================================================

//Fonction pour insérer dans la bdd

function insertStagiaires(array $listStag):bool{
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $status = false ;
    for ($i=0; $i < count($listStag); $i++) { 
        $sql = "INSERT INTO stagiaire (nom, prenom, place) VALUES (?,?,?)";
        $stmt= $bdd->prepare($sql);
        $status = $stmt->execute($listStag[$i]);
    }
    
    return $status;
}

insertStagiaires($table);

?>