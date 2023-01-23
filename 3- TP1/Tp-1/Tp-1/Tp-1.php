<?php


// INITIALISATION DES VARIABLES
$tabPlaces = array();
$listStag = array();

// FONCTION TABLEAU NUMERIQUE POUR LES PLACES 
function generateStagPlaces(): array
{
    for ($i = 0; $i < 16; $i++) {
        $a = $i + 1;
        $foncTabPlace[$i] = "Place_$a";
    }
    return $foncTabPlace;
}

// FONCTION TABLEAU POUR LES NOMS 
function readFileToArray(string $fichier): array
{
    $listStag = file($fichier);
    return $listStag;
}

//MELANGE DES NOMS

function randomizePlacesStag(array $listStagEtPlaces)
{

    $listValues = array_values($listStagEtPlaces);
    $listKeys = array_keys($listStagEtPlaces);
    shuffle($listValues);
    $creationTab = array_combine($listKeys, $listValues);
    return $creationTab;
}

//SAUVEGARDE DES VALEURS    

function saveListStagToFile($NouvellesPlaces): void
{
    $date = date("d-m-y_H-i-s");
    $fileName = "Save\backup_$date.txt";
    $content = "";
    foreach ($NouvellesPlaces as $key => $value) {
        $content .= "$key => $value";
    }
    file_put_contents($fileName, $content);
}

// LANCEMENT DES FONCTIONS
$tabPlaces = generateStagPlaces();
$listStag = readFileToArray('listStag.txt');
$listStagEtPlaces = array_combine($tabPlaces, $listStag);
$NouvellesPlaces = randomizePlacesStag($listStagEtPlaces);
saveListStagToFile($NouvellesPlaces);