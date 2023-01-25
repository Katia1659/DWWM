<?php 


include '../modele/functions.php';

session_start();


$file = 'Save/Save.json';

//Le fichier selectionner en .json est mis dans un tableau

$listStagPlaces = jsonToArray($file);

$_SESSION['$listStagPlaces'] = placeStagRotate($listStagPlaces);

header('Location: ../view/affichage.php');
 ?>