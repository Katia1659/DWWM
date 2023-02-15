<?php

include_once "../Modele/Personne.class.php";
include_once "../Modele/Manager.class.php";
include_once "../Modele/Developpeur.class.php";

// On instancie de nouveaux manager et de nouveaux développeurs

$manager[1] = new Manager('Legrand','Sebastien', "leg.sebastien@gmail.com", '07 50 60 40 80 ', 2000, "Management");

$manager[2] = new Manager('Landowski','Jakub', "lan.yac@gmail.com", '06 20 10 40 50 ', 2500, "Management");

$developpeur[1] = new Developpeur('Van', 'Lucas', 'Van.lucas@gmail.com', "06 20 10 40 50",1700, 'PHP');

$developpeur[2] = new Developpeur('Messuve', 'Alex', 'Mes.alex@gmail.com', "06 33 10 47 50",1800, 'Full stack');

// On affiche les informations des managers puis des développeurs

echo "Les managers : \n";
for($i = 1; $i <= count($manager); $i++) {

$manager[$i]->affiche();

$manager[$i]->calculerSalaire();
echo "\n";
}

echo "Les développeurs : \n";
for($i = 1; $i <= count($developpeur); $i++) {

$developpeur[$i]->affiche();

$developpeur[$i]->calculerSalaire();
echo "\n";
}






