<?php


include_once '../modele/Vehicule.class.php';

include_once '../modele/Voiture.class.php';
include_once '../modele/Camion.class.php';




//Creation de voitures
for ($i=0; $i < 1; $i++) { 


echo "Voiture ".Voiture::$compteur."\n";

echo "***************************"."\n";

echo "Infos du véhicule : "."\n";

$annee = readline("Année du modèle : ");
$prix = readline("Prix du véhicule : ");

$voiture = new Voiture($annee,$prix);

echo "***************************"."\n";
}


//Creation de camions

echo "Camion ".Camion::$compteur."\n";

echo "***************************"."\n";

echo "Infos du véhicule : "."\n";

$annee = readline("Année du modèle : ");
$prix = readline("Prix du véhicule : ");

$camion = new Camion($annee,$prix);

echo "***************************"."\n";

//Affichage camion
$demarreC = $camion->démarrer();
echo $demarreC;

$accelereC =$camion->accélérer();

$string = strval($camion);
echo $string;




    //Affichage voiture
 $voiture->démarrer();
echo $voiture;

$voiture->accélérer();
echo $voiture;

$voiture->__toString();
echo $voiture;



