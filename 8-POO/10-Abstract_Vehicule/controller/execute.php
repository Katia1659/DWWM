<?php

include_once "../modele/Voiture.class.php";
include_once "../modele/Vehicule.class.php";
include_once "../modele/Camion.class.php";
echo PHP_EOL;
$camion = new Camion(2022, 30000);
$voiture = new Voiture(2021, 20000);


echo $camion ;
echo PHP_EOL;
echo $voiture; 
echo PHP_EOL;


echo PHP_EOL;
$camion->demarrer();
$camion->accelerer();

echo PHP_EOL;

$voiture->demarrer();
$voiture->accelerer();







