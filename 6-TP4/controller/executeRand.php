<?php
include "../modele/function.php";
session_start();


$_SESSION['$listPlaceStag'] = randomizePlacesStag($_SESSION['$listPlaceStag']) ;

header('Location: ../view/affichage.php');

//  print_r($_SESSION);
?>