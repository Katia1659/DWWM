<?php

//exercice 1
// Fonction pour ouvrir un fichier texte contenant les différentes places

function readFileToArray(string $filePath) : array {
    $listStag = file($filePath, FILE_IGNORE_NEW_LINES);
    return $listStag;
}

// exercice 2
// Création d'un tableau qui donne des places à chaque personne

function generateStagPlaces(array $listPlaces, array $listStag) : array {
    $tableau = array_combine($listPlaces, $listStag);
    return $tableau;

}

// exercice 3
// Fonction pour mélanger les personnes afin de les changer de place

// function randomizePlacesStag(array $listStagPlaces) : array {
//     $values = array_values($listStagPlaces);
//     $keys = array_keys($listStagPlaces);
//     shuffle($values);
//     $listStagPlaces = array_combine($keys, $values);

//     return $listStagPlaces;
// }



// exercice 4
// Fonction afin de créer un fichier qui sauvegarde les nouvelles places avec la date dans le titre

function saveListStagToJson(array $listStagPlaces): string {
    $date = date('d-m-y h-i-s');
    if (!is_dir('Save')) {
        mkdir('Save');
}
    $dir = "Save\Save.json";
    $json = json_encode($listStagPlaces);
    file_put_contents($dir, $json);
    return $dir;
}

//exercice 5
//fonction pour que les values decale de chaque keys

function placesStagRotate(string $filePath) : array
{
    if(file_exists('./Save/Backup.json')) {
        $listStagPlaces = './Save/Backup.json';
        
    }
    $json = file_get_contents($listStagPlaces);
    $listStagPlaces = json_decode($json, true);

    $keys = array_keys($listStagPlaces);
    $values = array_values($listStagPlaces);
    $last_value = array_pop($values);
    array_unshift($values, $last_value);
    $listStagPlaces =  array_combine($keys, $values);
    $saveJson = json_encode($listStagPlaces);
    file_put_contents('./Save/Backup.json', $saveJson);
    return $listStagPlaces;
}




























?>