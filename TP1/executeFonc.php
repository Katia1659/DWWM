<?php

include_once ('fonctions.php');


// vériication de la fonction readFileToArray
$fichierLu=readFileToArray('list.txt');


// Création du tableau pour la deuxième fonction et son lancement
$tabPlace = array('place_1','place_2','place_3','place_4','place_5','place_6','place_7','place_8','place_9','place_10','place_11','place_12','place_13','place_14','place_15','place_16') ;

$nom=$fichierLu;
$place=$tabPlace;
$tabPlaceNom=generateStagPlaces($place, $nom);


// Mélange les valeurs du tableau données en laissant les clés dans son ordre d'origine
$tabRandomize = randomizePlacesStag($tabPlaceNom);


// Sauvegarde du tableau mélangé dans un nouveau fichier
$newFile = $tabPlaceNom;

// Passage du tableau melangé en format json 

$listStagPlace= saveListStagtoJson($newFile);

// Décalage des valeurs 
$listStagPlace = placesStagRotate($listStagPlace);
?>

