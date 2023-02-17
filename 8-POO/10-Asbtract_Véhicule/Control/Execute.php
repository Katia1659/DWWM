<?php
include_once "../Model/Camion.class.php";
include_once "../Model/Voiture.class.php";



$camion1 = new Camion("2009","Truck",12500);
$camion2 = new Camion("2012","Big Truck",12500);

$voiture1 = new Voiture ("2015","Golf",14500);
$voiture2 = new Voiture ("2018","Model X",40500);



echo "\n\n";
echo $camion1;
$camion1->demarrer();
$camion1->accelerer();
echo "\n";

echo $camion2;
$camion2->demarrer();
$camion2->accelerer();
echo "\n";

echo "\n\n";

echo $voiture1;
$voiture1->demarrer();
$voiture1->accelerer();
echo "\n";

echo $voiture2;
$voiture2->demarrer();
$voiture2->accelerer();
echo "\n";






?>