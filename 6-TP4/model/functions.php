<?php




// Fonction pour ouvrir un fichier texte contenant les différentes places

function readFileToArray(string $filePath) : array {
    $listStag = file($filePath, FILE_IGNORE_NEW_LINES);
    return $listStag;
}





// Création d'un tableau qui donne des places à chaque personne

function generateStagPlaces(array $listPlaces, array $listStag) : array {
    $tableau = array_combine($listPlaces, $listStag);
    return $tableau;

    }

    


    // Fonction pour mélanger les personnes afin de les changer de place

    function randomizePlacesStag(array $listStagPlaces) : array {
        $values = array_values($listStagPlaces);
        $keys = array_keys($listStagPlaces);
            shuffle($values);
            $listStagPlaces = array_combine($keys, $values);


            return $listStagPlaces;
        }




// Fonction afin de créer un fichier qui sauvegarde les nouvelles places avec la date dans le titre

function saveListStagToJson(array $listStagPlaces): string {
    $date = date('d-m-y h-i-s');
    if (!is_dir('../controller/Save')) {
        mkdir('../controller/Save');
    }
    $dir = "../controller/Save/Save.json";
    $json = json_encode($listStagPlaces);
    file_put_contents($dir, $json);
    return $dir;
    

}

// //saveListStagToFile($listStagPlaces);

// function jsonToArray(string $filePath) : array 
// {
//     if(file_exists('./Save/Backup.json')) {
//         $filePath = './Save/Backup.json'; 

//     }
//     $json = file_get_contents($filePath);
//     return json_decode($json, true);
// }



function placesStagRotate(string $bJson) : array 
{
    if(file_exists($bJson)) {
        $filePath = $bJson; 

    }
    $json = file_get_contents($filePath);
    $listStagPlaces = json_decode($json, true);

    $keys = array_keys($listStagPlaces);
    $values = array_values($listStagPlaces);
    $last_value = array_pop($values);
    array_unshift($values, $last_value);
    $listStagPlaces =  array_combine($keys, $values);
    $saveJson = json_encode($listStagPlaces);
    file_put_contents($bJson, $saveJson);
    return $listStagPlaces;
}

function datee(){
    $jour = date('d-m-y');
    $heure = date('h-i-s');
    $date = "$jour'_'$heure";
    return $date;
}


function tabCsv(string $bJson, string $dir){
    $json = file_get_contents($bJson);
    $listStagPlaces = json_decode($json, true);
    
  $ligne = array('Nom Prenom');
    foreach ($ligne as $key => $value) {
        $key = 'Place';
        $value = 'Nom Prenom';
        $ligne = "$key $value";
        $ligne = str_replace(' ',';',$ligne);
    file_put_contents($dir, $ligne.PHP_EOL ,FILE_APPEND);
    }

    foreach ($listStagPlaces as $key => $value) {
        $line = "$key $value";
        $line = str_replace(' ',';',$line);
        $save = file_put_contents($dir, $line.PHP_EOL ,FILE_APPEND);
    }
    return $dir;
}