<?php
include_once "../modele/Point.class.php";

/*POUR LE POINT  */
/*DEMANDE D'INFORMATION A L'UTILISATEUR */
$abs = readline("Donner l'abscisse : ");
$ord = readline("Donner l'ordonnée : ");

/*CREACTION DE L'OBJET*/
$p1 = new Point($ord, $abs);
echo $p1->norme();
PHP_EOL;