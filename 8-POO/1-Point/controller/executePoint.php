<?php

include ("../modele/Point.class.php");

$resultat = new Point(1,2);

print_r($resultat);

$norme = $resultat->norme();

echo $norme;

?>