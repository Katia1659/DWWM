<?php
// FONCTION TABLEAU POUR LES NOMS 
function readFileToArray(string $filePath): array
{
    $listStag = file($filePath);
    return $listStag;
}

// FONCTION TABLEAU COMBINE
function generateStagPlaces(array $tabPlaces, array $listStag): array
{
    $listePlaStag = array_combine($tabPlaces, $listStag);
    return $listePlaStag;
}

// Fonction pour enregistrer le premier tableau 
function saveListStagToJson(array $listStagPlaces): string
{
    $encode = json_encode($listStagPlaces);
    return file_put_contents("../controller/save.json", $encode);
}

//MELANGE DES NOMS
function randomizePlacesStag(array $listStagPlaces): array
{
    $listValues = array_values($listStagPlaces);
    $listKeys = array_keys($listStagPlaces);
    shuffle($listValues);
    $creationTab = array_combine($listKeys, $listValues);
    return $creationTab;
}

//FONCTION POUR CHANGER DE PLACE 
function placesStagRotate(string $listPlaceStag): array
{
    if (file_exists('../controller/save2.json')) {
        $jason = file_get_contents('../controller/save2.json');
        $decode = json_decode($jason, true);
        $listValues = array_values($decode);
        $listKeys = array_keys($decode);
        $temp = $listValues[0];
        for ($i = 0; $i < sizeof($listValues) - 1; $i++) {
            $listValues[$i] = $listValues[$i + 1];
        }
        $listValues[15] = $temp;
        $echange = array_combine($listKeys, $listValues);
        $encode = json_encode($echange);
        file_put_contents("../controller/save2.json", $encode);
        return $echange;
    } else {
        $decode = json_decode($listPlaceStag, true);
        $listValues = array_values($decode);
        $listKeys = array_keys($decode);
        $temp = $listValues[0];
        for ($i = 0; $i < sizeof($listValues) - 1; $i++) {
            $listValues[$i] = $listValues[$i + 1];
        }
        $listValues[15] = $temp;
        $echange = array_combine($listKeys, $listValues);
        $encode = json_encode($echange);
        file_put_contents("../controller/save2.json", $encode);
        return $echange;
    }
}

function fileEnfileCsv(string $json) : void
{
    $formeTableau = array();
    $nouveautableau = array();

    $fichier = file_get_contents($json);

    $decode = json_decode($fichier, true);
    
    $listValues = array_values($decode);
    $listKeys = array_keys($decode);
    for ($i = 0; $i < 16; $i++) {
        $formeTableau[] = array($listKeys[$i] . " " . $listValues[$i]);
    }

    $i = 0;
    foreach ($formeTableau as $key) {
        $i++;
        $nouveautableau[$i] = str_replace(" ", ";", $key);
    }

    $fpn = fopen('extraction_Stagiaire.csv', 'w');

    foreach ($nouveautableau as $fields) {
        fputcsv($fpn, $fields);
    }

    fclose($fpn);

}


function tableaunom(array $newTableau )  : array {
   


    $nomPrenom = array_values($newTableau);
    $nomPrenom = implode(' ', $nomPrenom);
    $separate = explode(' ', $nomPrenom);

   
    $noms = array();
    foreach ($separate as $key => $val) {
        if ($key % 2 == 0) {
            $noms[] = $val;
        } else {
            $prenoms[] = $val;
        }
    }

    // for ($i = 0; $i < count($prenoms); $i++) {
    //     $nouveauTableau[] = array($noms[$i], $prenoms[$i], $tabPlaces[$i]);
    // }

    return $noms;
}

function tableauPrenom(array $newTableau )  : array {
   
    $nomPrenom = array_values($newTableau);
    $nomPrenom = implode(' ', $nomPrenom);
    $separate = explode(' ', $nomPrenom);

    $prenoms = array();
 
    foreach ($separate as $key => $val) {
        if ($key % 2 == 0) {
            $noms[] = $val;
        } else {
            $prenoms[] = $val;
        }
    }

    // for ($i = 0; $i < count($prenoms); $i++) {
    //     $nouveauTableau[] = array($noms[$i], $prenoms[$i], $tabPlaces[$i]);
    // }

    return $prenoms;
}