<?php
include '../modele/functions.php';
header('Location: ../view/affichage.php');
session_start();

$_SESSION['$nweRotation'] = placesStagRotate('json/jFile.json');
