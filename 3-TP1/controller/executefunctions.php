<?php
include "../modele/functions.php";
session_start();

$_SESSION ['listPlaceStag'] = placeStagRotate('../modele/Backup.json');
print_r($_SESSION['listPlaceStag']);
header('location: ../View/affichage.php');
?>