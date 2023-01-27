<?php

include "../modele/function.php";
session_start();

$fileJsonPath = "../controller/JASON/postes_pc_version.json";

$_SESSION['$listPlaceStag'] = placesStagRotate($fileJsonPath);

header('Location: ../view/affichage.php')
?>