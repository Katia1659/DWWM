<?php




// Fonction pour ouvrir un fichier texte contenant les différentes places

function readFileToArray(string $filePath): array
{
    $listStag = file($filePath, FILE_IGNORE_NEW_LINES);
    return $listStag;
}





// Création d'un tableau qui donne des places à chaque personne

function generateStagPlaces(array $listPlaces, array $listStag): array
{
    $tableau = array_combine($listPlaces, $listStag);
    return $tableau;
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




// Fonction afin de créer un fichier qui sauvegarde les nouvelles places avec la date dans le titre

function saveListStagToFile(array $listStagPlaces): string
{
    $date = date('d-m-y h-i-s');
    if (!is_dir('Save')) {
        mkdir('Save');
    }

    $dir = "Save\Save.json";
    $json = json_encode($listStagPlaces);
    file_put_contents($dir, $json);

    return $dir;
}

//saveListStagToFile($listStagPlaces);
function jsonToArray(string $filePath): array
{
    if (file_exists('./Save/Backup.json')) {
        $filePath = './Save/Backup.json';
    }
    
    $json = file_get_contents($filePath);
    return json_decode($json, true);
}

function changementPlaces(array $listStagPlaces): array
{
    $keys = array_keys($listStagPlaces);
    $values = array_values($listStagPlaces);
    $last_value = array_pop($values);
    array_unshift($values, $last_value);

    $listStagPlaces =  array_combine($keys, $values);
    $saveJson = json_encode($listStagPlaces);
    file_put_contents('./Save/Backup.json', $saveJson);

    return $listStagPlaces;
}
/*

    $reponse = ' ';
    while ($reponse == ' ') {

    $listValues = array_values($listStagPlaces);
    $listKeys = array_keys($listStagPlaces);
    $temp = $listValues[0];
    for ($i = 0; $i < sizeof($listValues) - 1; $i++) {
        $listValues[$i] = $listValues[$i + 1];
    }
    $listValues[15] = $temp;
    $listStagPlaces = array_combine($listKeys, $listValues);
    var_dump($listStagPlaces);
    $reponse = readline('On continue ! Si oui tape sur entrée');


    }
}
*/
