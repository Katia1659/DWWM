<?php

// // Fonction pour ouvrir un fichier texte contenant les différentes places

function readFileToArray(string $filePath) : array {
    $listStag = file($filePath, FILE_IGNORE_NEW_LINES);
    return $listStag;
}


// // Création d'un tableau qui donne des places à chaque personne

function generateStagPlaces(array $listPlaces, array $listStag) : array {
    $tableau = array_combine($listPlaces, $listStag);
    return $tableau;

}


// // Fonction pour mélanger les personnes afin de les changer de place

function randomizePlacesStag(array $listStagPlaces) : array {
    $values = array_values($listStagPlaces);
    $keys = array_keys($listStagPlaces);
    shuffle($values);
    $listStagPlaces = array_combine($keys, $values);

    return $listStagPlaces;
}




// // Fonction afin de créer un fichier qui sauvegarde les nouvelles places avec la date dans le titre

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


// //fonction pour que les values decale de chaque keys

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



  function jsonToCSV(string $saveLastJson) 
{

  $saveLastJson = file_get_contents('save/Save.json');
  //lire le contenu d'un fichier appelé 'Save/Save.json' et l'attribue à la variable $saveLastJson
  $CSV = 'save/newList.csv';
  //le chemin de fichier du nouveau fichier CSV 
 $tabJson = json_decode($saveLastJson, true);
 //convertir la chaîne JSON en un tableau et l'attribue à la variable $tabJson
$i = 0;

foreach ($tabJson as $key=> $value) {

    $tabCSV[1]='place'.';'.str_replace(" ",";",'NOM PRENOM')."\n";
    $tabCSV[$i]=$key.';'.str_replace(" ",";",$value)."\n";
    $i++;
}
//La fonction parcourt ensuite le tableau, créant un nouveau tableau appelé $tabCSV, avec à chaque itération, l'ajout d'une nouvelle ligne dans le tableau avec le format 'place;NOM PRENOM' et 'place;nomStag' respectivement

file_put_contents($CSV,$tabCSV);
//la fonction utilise file_put_contents pour écrire le contenu du tableau $tabCSV dans le fichier $CSV.

}


function insertprenom($listStagPlaces){


$newTableau = $listStagPlaces;

    $k = array_keys($newTableau);
    $v = array_values($newTableau);

    $v = implode(' ', $v);
    $separate = explode(' ', $v);


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

function insertnom($listStagPlaces){


    $newTableau = $listStagPlaces;
    
        $k = array_keys($newTableau);
        $v = array_values($newTableau);
    
        $v = implode(' ', $v);
        $separate = explode(' ', $v);
    
    
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







