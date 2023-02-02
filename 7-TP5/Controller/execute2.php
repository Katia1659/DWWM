<?php
include_once ("../Modele/DBManagement.php");
include_once ("../Modele/functions.php");

$nomOuPrenom = $_POST['perso'];
$place = $_POST['place'];
$ancienNom = $_POST['ancienNom'];
$nouveauNom= $_POST['nouveauNom'];

updateStagiaires($nomOuPrenom, $nouveauNom, $ancienNom, $place); 

header('Location: ../View/index.php');
