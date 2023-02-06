<?php
include_once "../Modele/Point.class.php";

//on demande a l'utilisateur les coordonnés d'un point
$x = readline("Entrez l'abscisse : ");
$y = readline("Entrez l'ordonne : ");

//on crée le point
$point2 = new Point ($x,$y);
//on appelle la norme
$norme2 = $point2->norme();

//on affiche le resultat
echo "la norme du point ($x,$y) est : $norme2";
?>