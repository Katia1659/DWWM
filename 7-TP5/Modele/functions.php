<?php

//1. Définition de la fontion readFileToArray:

function readFileToArray(String $filePath): array
{
  // declarer un tableau $line et l'affecter avec les lines de fichier :
  $line = file($filePath,FILE_IGNORE_NEW_LINES);
  return $line;
}


//2. déclaration de la fonction pour générer un tableau nom/place:
function generateStagePlaces(array $listPlaces, array $listStag): array
{
  // combine les tableaux  pour combiner les deux tableaux: 
  return array_combine($listPlaces, $listStag);
}


// 3.function pour mettre les places en aléatoire:
function randomizePlacesStag(array $listStagPlaces): array
{
  $generatedListTab = array();
  $valuesList = array_values($listStagPlaces);
  $keysList = array_keys($listStagPlaces);

  shuffle($valuesList);

  $generatedListTab = array_combine($keysList, $valuesList);

  return $generatedListTab;
}

// 4.function qui sauvegarde le nouveaux tableau dans un fichier.txt :

function saveListStagToFile(array $listStagPlaces): string
{

  $date_backup = date("d-m-y_H;i;s");
  $fileName = "save\backup_ $date_backup.txt";
  $content = "";
  foreach ($listStagPlaces as $key => $value) {
    $content .= "$key => $value\n";
  }

  return file_put_contents($fileName, $content);
}

//5.fonction pour faire le save format jason dans le répertoire json:
function saveListStagToJson(array $listStagPlaces): string
{
  $jsonFile = json_encode($listStagPlaces);
  file_put_contents("json\jFile.json", $jsonFile);
  return $jsonFile;
}

//6.la fonction rotatePlaces va effectuer une rotation de stagiare en reprenant le sauvegarde json :
function placesStagRotate(string $filePath): array
{
 
    $json = file_get_contents('json/jFile.json');
    $tabjson = json_decode($json, true);
    $valueTab = array_values($tabjson);
    $keysTab = array_keys($tabjson);
    array_unshift($valueTab, array_pop($valueTab));
    $nweRotation = array_combine($keysTab, $valueTab);
    $encode = json_encode($nweRotation);
    file_put_contents('json/jFile.json', $encode);
    return $nweRotation;
  
}
