<?php


include_once "../Modele/Client.class.php";
include_once "../Modele/Compte.class.php";

$compte1 = new Compte (12005, 'Legrand', 'Sebastien', '07 83 85 92 70');

echo "Compte : ".$compte1->getCode(). "\n";

$compte1->getProprietaire()->afficher();

$compte2 = new Compte (12006, 'Messuve', 'Alex', '06 69 69 69 69');

echo "Compte : ".$compte2->getCode(). "\n";

$compte2->getProprietaire()->afficher();

$crediterCompte = 

