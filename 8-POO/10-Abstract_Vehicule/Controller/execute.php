<?php
include_once("../Modele/Vehicule.php");
include_once("../Modele/Voiture.php");
include_once("../Modele/Camion.php");

//On créer les camion et voiture avec leurs Class
$voiture[1]= new Voiture (2006, 1500);
$voiture[2]= new Voiture (2012, 15000);
$camion[1]= new Camion (2022, 7000);
$camion[2]= new Camion (1996, 1500);

echo "Voiture : \n";
for ($i=1; $i <=count ($voiture) ; $i++) { 
    echo $voiture[$i];
    echo $voiture[$i]->demarrer()."\n";
    echo $voiture[$i]->accelerer()."\n";
    echo "\n";
}


echo "Camion : \n";
for ($i=1; $i <=count ($camion) ; $i++) { 
    echo $camion[$i];
    echo $camion[$i]->demarrer()."\n";
    echo $camion[$i]->accelerer()."\n";
    echo "\n";
}