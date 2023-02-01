<?php
include "../Modele/DBManagement.php";
include "../modele/functions.php";


//Réception des informations venu du front 
$nomOuPrenom = ($_GET['nomOuPrenom']);
$nouveauNomOuPrenom = ($_GET['nouveau']);
$ancienNomOuPrenom = ($_GET['ancien']);
$place = ($_GET['place']);

//Lancement de la function pour modifier une information de la BDD 
changerInformation($nomOuPrenom, $ancienNomOuPrenom, $nouveauNomOuPrenom, $place);
header('location:../view/index.php');

// 
