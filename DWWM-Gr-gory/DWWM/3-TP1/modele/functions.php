<?php

///////////////////////FONCTION 1///////////////////////////// function readFileToArray($filePath) : array [];
//creation fonction
function readFileToArray(string $filePath): array
{
    $listStag = file($filePath, FILE_IGNORE_NEW_LINES);
    return $listStag;
}

///////////////////////FONCTION 2///////////////////////////// function generateStagPlaces(array $listStag, array $listPlaces) : array [k,v];
//creation fonction
function generateStagPlaces(array $listPlaces, array $listStag): array
{
    $combine = array_combine($listPlaces, $listStag);
    return $combine;
}

///////////////////////FONCTION 3///////////////////////////// function randomizePlacesStag(array [k,v] $listStagPlaces) : array [k,v];
function randomizePlacesStag(array $listStagPlaces): array
{
    $temp = array();
    $temp = array_values($listStagPlaces);
    shuffle($temp);
    $melange = array_combine(array_keys($listStagPlaces), $temp);
    return $melange;
}

///////////////////////FONCTION 4///////////////////////////// function saveListStagToFile(array [k,v] $listStagPlaces): void;
function saveListStagToFile(array $tab) :string {
    $text = '';
    foreach ($tab as $key => $value) {
        $text = $text. "$key => $value";
    }
    $date = date("d-m-y_h-i-s");
    $fichier = 'Backup_'.$date.'.txt';
    file_put_contents($fichier,$text);
    return $text;
}

///////////////////////FONCTION 5/////////////////////////////  function saveListStagToJson
function saveListStagToJson(array $listStagPlaces) :string {
    $name = 'Backup.json';
        $file = json_encode($listStagPlaces,true).PHP_EOL;
    file_put_contents($name,$file);
    return $file;
}

///////////////////////FONCTION 6/////////////////////////////  function mixListJson
function placesStagRotate(string $listPlaceStag) :array{
    $json_data = file_get_contents($listPlaceStag);
$test = json_decode($json_data, true);
$test2 = json_decode($json_data, true);
$temp = array_pop($test2);
array_unshift($test2,$temp);
$test2 = array_combine(array_keys($test),array_values($test2));
$text = json_encode($test2,true);
file_put_contents($listPlaceStag,$text);
return $test2;
}
