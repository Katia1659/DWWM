<?php
//Fonction qui récupère les valeurs d'un fichier et le transforme en tableau
function readFileToArray(string $filePath): array
{
    return file($filePath, FILE_IGNORE_NEW_LINES);
}

//Fonction qui assemble deux tableau pour faire un tableau associatif.
function generateStagPlaces(array $listPlaces, array $listStag): array
{
    return array_combine($listPlaces, $listStag);
}

//Fonction qui mélange les valeurs d'un tableau associatif.
function randomizePlacesStag(array $listStagPlaces): array
{
    $keys = array_keys($listStagPlaces);
    $values = array_values($listStagPlaces);
    shuffle($values);
    return array_combine($keys, $values);
}

//fonction qui permet de sauvegarder le tableau associatif en fichier texte.
function saveListStagToFile(array $listStagPlaces): void
{
    $json = json_encode($listStagPlaces);
    $dir = '..\controller\save\Backup.json';

    // un if pour savoir si le dossier n'existe pas alors il sera creer.
    $dir2 = "..\controller\save";
    if (!is_dir($dir2)) {
        mkdir($dir2);
    }
    file_put_contents($dir, $json);

    //Permet de mettre un contenue dans un fichier si le fichier n'existe pas il sera creer.
}


//Fonction qui permet de decaler de un le tableau et le sauvegarde en fichier json.
function placeStagRotate(string $filePath): array
{
    //permet de convertir un fichier json en tableau.
    $json = file_get_contents($filePath);
    $listPlaceStag = json_decode($json, true);

    //Permet de faire une rotation.
    $keys = array_keys($listPlaceStag);
    $values = array_values($listPlaceStag);
    $lastValue = array_pop($values);
    array_unshift($values, $lastValue);
    $listPlaceStag = array_combine($keys, $values);

    //Sauvegarde en fichier json.
    $json = json_encode($listPlaceStag);
    file_put_contents('..\controller\save\Backup.json', $json);

    //retourne un tableau.
    return $listPlaceStag;

}

function extractJsonToCsv(string $filePath): string
{
    $json = file_get_contents($filePath);
    //remplace les espaces par des ;
    $json = preg_replace('/\s+/',';', $json);

    $array = json_decode($json, true);
    $csv = 'Place;Nom;Prenom'.PHP_EOL;

    foreach ($array as $key => $value) {
        $csv.= $key. ';' .$value. PHP_EOL;

    }
    $filePath = './save/ListStag.csv';
    file_put_contents($filePath,$csv);
    return $filePath;
}

