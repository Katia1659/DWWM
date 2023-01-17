<?php 

include 'func2.php';
$placesStag;

function saveFileToJson(array $placesStag) : String
{

// Séparation des clés et des values
  $nomStag = array_values($placesStag);
  $places = array_keys($placesStag);
   
  //Decale les valeurs de $nomStag vers la gauche
  array_unshift($nomStag,array_pop($nomStag)); 

  $newRotate = array_combine($places,$nomStag);

  //Ecrire le contenu de la variable $jsonData dans un fichier .json
 $jsonData = json_encode($newRotate);
    file_put_contents("json files/Statham.json", $jsonData);

return $jsonData;
}

// Appel de fonction et valeur de return placer dans une variable

$newJson = saveFileToJson($placesStag);

$newtabJson = json_decode($newJson,true); 

$newnewJson = saveFileToJson($newtabJson);

$newtabJson2 = json_decode($newnewJson,true);

$newnewnewJson = saveFileToJson($newtabJson2);
