<?php


include_once '../modele/Vehicule.class.php';

include_once '../modele/Voiture.class.php';
include_once '../modele/Camion.class.php';




//Creation de voitures
for ($i=1; $i < 2; $i++) { 

echo "Voiture ".$i++."\n";

echo "***************************"."\n";

echo "Infos du véhicule : "."\n";

$annee = readline("Année du modèle : ");
$prix = readline("Prix du véhicule : ");

$voiture = new Voiture($annee,$prix);

echo "***************************"."\n";
}


//Creation de camions
for ($i=1; $i < 2; $i++) { 

echo "Camion ".$i++."\n";

echo "***************************"."\n";

echo "Infos du véhicule : "."\n";

$annee = readline("Année du modèle : ");
$prix = readline("Prix du véhicule : ");

$camion = new Camion($annee,$prix);

echo "***************************"."\n";
}
//Affichage camion
$demarreC = $camion->démarrer();
echo $demarreC;

$accelereC =$camion->accélérer();
echo $accelereC;

echo $camion;




    //Affichage voiture
$demarreV= $voiture->démarrer();
echo $demarreV;

$accelereV= $voiture->accélérer();
echo $accelereV;

echo $voiture;



