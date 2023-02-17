<?php

//creation de include pour relier les class
include_once "../Modele/Vehicule.class.php";
include_once "../Modele/Voiture.class.php";
include_once "../Modele/Camion.class.php";

//creation des class camion/voiture
$camion[1] = new Camion (2021, 100000);

$camion[2] = new Camion (2019, 80000);

$voiture[1] = new Voiture (2018, 15000);

$voiture[2] = new Voiture (2015, 12000);

//creation d'un fort pour afficher les camion
echo "Les camions : \n";
for ($i = 1; $i <= count ($camion); $i++) {
    echo $camion[$i]->demarrer()."\n";
    echo $camion[$i]->accelerer()."\n";
    echo $camion[$i]."\n";


}

echo " \n";

//creation d'un fort pour afficher les camion
echo "Les voitures : \n";
for ($i = 1; $i <= count ($voiture); $i++) {
    echo $voiture[$i]->demarrer()."\n";
    echo $voiture[$i]->accelerer()."\n";
    echo $voiture[$i]."\n";
}
