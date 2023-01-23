<?php
include "../modele/functions.php";
session_start();

$_SESSION ['listPlaceStag'] = placeStagRotate('../modele/Backup.json');

header('location: ../View/affichage.php');
?>