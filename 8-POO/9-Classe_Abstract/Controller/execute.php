<?php
require_once '../Modele/Manager.class.php';
require_once '../Modele/Developpeur.class.php';
require_once '../Modele/Personne.class.php';

//Creation des managers et developpeur
$mana1 = new Manager('Mess', 'Alex', 'alex@alex.fr', '055522142', 'Informatique');
$mana2 = new Manager('Lg', 'Seb', 'seb@seb.fr', '050522214', 'Secretaria');

$dev1= new Developpeur('Ich', 'Maks', 'maks@maks.fr', '055522442', 'Python');
$dev2 = new Developpeur('Caron', 'Bapt', 'bapt@bapt.fr', '05555412245', 'PHP');

$mana1->afficher();
$mana2->afficher();
echo "\n";
echo $dev1->afficher();
echo $dev2->afficher();

