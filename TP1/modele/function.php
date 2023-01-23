<?php

//================================================ FONCTION 1 ===============================================================

//fonction pour lire le fichier

function readFileToArray(string $filePath) : array {
        $nom = file($filePath,FILE_IGNORE_NEW_LINES);
        return $nom;
}


//================================================ FONCTION 2 ===============================================================

//fonction pour créer le tableau associatif

function generateStagPlaces(array $listPlaces, array $listStag) : array {   
    
        $combine = array_combine($listPlaces,$listStag);
        return $combine;

        
}    



//================================================ FONCTION 3 ===============================================================



//fonction pour créer le json de base

function saveListStagToJson(array $listStagPlaces): string{
    $json = json_encode($listStagPlaces);
     //On vérifie si le nom du dossier existe    
     if (!file_exists('../controller/JASON')) {
        mkdir('../controller/JASON');        
    }

    //on garde dans le fichier  l'association du tableau
    $contenu = "";
    foreach ($listStagPlaces as  $k => $v) {   
        $contenu.= "$k => $v".PHP_EOL;
    }

    //on créer le nouveau json
    if (!file_exists("../controller/JASON/postes_pc_version.json")) {
       file_put_contents("../controller/JASON/postes_pc_version.json", $json, true);
        
    }
    
    return $json;
    
            
}

//================================================ FONCTION 4 ===============================================================

//fonction pour changer les places en aléatoires
function randomizePlacesStag(array $listStagPlaces) : array {
    $new = array();
    $values = array();
    //on créer un tableau avec juste les value et on les mélanges
    $values = array_values($listStagPlaces);
    shuffle($values);

    //on recréer un tableau avec les key et les value
    $new = array_combine(array_keys($listStagPlaces),$values);
    return $new;
}

//================================================ FONCTION 5 ===============================================================

// //fonction pour changer les places et créer un nouveau json

function placesStagRotate(string $listStagPlaces): array{
    //on lis le fichier
    $json = file_get_contents($listStagPlaces);
    $tab = json_decode($json, true);

    //on créer des tableau temporaires avec les key et value
    $key = array();
    $values = array();
    $key = array_keys($tab);
    $values = array_values($tab);
    //on permut
   for ($i=0; $i < count($values) - 1; $i++) { 
        $temp = $values[$i];
        $values[$i] = $values[$i + 1];
        $values[$i + 1] = $temp;
    }
    //on créer le nouveau tableau
    $new = array();
    $new = array_combine($key,$values);
    $resultat = json_encode($new);
    file_put_contents("$listStagPlaces",$resultat, true);

    return $new;
   
}



?>