<?php
include "../modele/function.php";
session_start();


$_SESSION['$listPlaceStag'] = placesStagRotate("../controller/JASON/postes_pc_version.json");

header('Location: ../view/affichage.php');

//  print_r($_SESSION);
?>