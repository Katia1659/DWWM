<?php
include_once "../model/Camion.class.php";
include_once "../model/Vehicule.class.php";
include_once "../model/Voiture.class.php";

//On créer un camion, on l'affiche et on test les méthodes
$testCamion = new Camion(1950, 550000);
echo $testCamion;
$testCamion->demarrer();
$testCamion->accelerer();

//On créer une voiture, on l'affiche et on test les méthodes
$testVoiture = new Voiture(2000, 5000);
echo $testVoiture;
$testVoiture->demarrer();
$testVoiture->accelerer();


?>