<?php
include "../Modele/DBManagement.php";
include "../modele/functions.php";

//Réception des informations venu du front 
$nomOuPrenom = ($_GET['nomOuPrenom']);
$nouveauNomOuPrenom = ($_GET['nouveau']);

$place = ($_GET['place']);

//Lancement de la function pour modifier une information de la BDD 
changerInformation($nomOuPrenom, $nouveauNomOuPrenom, $place);
header('location:../view/index.php');

// 
