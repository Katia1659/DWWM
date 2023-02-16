<?php
include_once("../Modele/Vehicule.class.php");
include_once("../Modele/Camion.class.php");
include_once("../Modele/Voiture.class.php");

//creation voiture
$audi = new Voiture("2010",'RS3',25000);

echo $audi;
echo "\n";
echo $audi->demarrer();
echo "\n";
echo $audi->accelerer();
echo "\n";

//creation camion
echo "\n";
$mercedes = new Camion("2010",'camion2',55000);

echo $mercedes;
echo "\n";
echo $mercedes->demarrer();
echo "\n";
echo $mercedes->accelerer();


