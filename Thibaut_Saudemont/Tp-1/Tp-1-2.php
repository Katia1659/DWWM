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

// LANCEMENT DES FONCTIONS
$tabPlaces = generateStagPlaces();
$listStag = readFileToArray('listStag.txt');
$listePlaStag = array_combine($tabPlaces, $listStag);



//FONCTION POUR CHANGER DE PLACE 
function changementPlaces($listePlaStag)
{
    while ($reponse = 1 ) {
  
    $listValues = array_values($listePlaStag);
    $listKeys = array_keys($listePlaStag);
    $temp = $listValues[0];
    for ($i = 0; $i < sizeof($listValues) - 1; $i++) {
        $listValues[$i] = $listValues[$i + 1];
    }
    $listValues[15] = $temp;
    $listePlaStag = array_combine($listKeys, $listValues);
    var_dump($listePlaStag);
    $reponse = readline('On continue !');
   

}
}

changementPlaces($listePlaStag);