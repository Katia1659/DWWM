<?php
include_once "../modele/Point.class.php";
include_once "../modele/Cercle.class.php";

/*POUR LE CERCLE*/
/*DEMANDE D'INFORMATION A L'UTILISATEUR */
$abs = readline("Donner l'abscisse : ");
$ord = readline("Donner l'ordonnée : ");
$ray = readline("Donner le rayon : ");

/*CREACTION DE L'OBJET*/
$cercle1 = new Cercle($ord, $abs, $ray);

/*LANCEMENT DES METHODES*/
$cercle1 -> afficher();
$cercle1 -> getPerimetre();
$cercle1 -> getSurface();



/*POUR LE POINT*/
/*DEMANDE D'INFORMATION A L'UTILISATEUR */
echo "Donner un point :\n";
$abs = readline("X:");
$ord = readline("Y:");

/*CREACTION DE L'OBJET*/
$point1 = new Point($ord, $abs);

/*LANCEMENT DES METHODES*/
$point1 -> afficher();
$cercle1 -> appartient($abs, $ord);

PHP_EOL;






