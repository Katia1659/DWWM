<?php 


require ('../modele/functions.php');



session_start();

$_SESSION = NULL;

$listStagPlace = placesStagRotate('./Save/Save.json');

$_SESSION['$listStagPlace'] = $listStagPlace;

header('Location: ../views/affichage(1).php');
 
 
 
 ?>