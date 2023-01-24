<?php
include('../modele/functions.php');
session_start();

$jsonFile='Controller\json\jFile.json';
$_SESSION['$nweRotation']=placesStagRotate($jsonFile);

header('Location:..\View\affichage.php');