<?php

include_once "../modele/Point.class.php";

$x = readline("Donner l'abcisse:  ");
$y = readline("Donner l'ordonne:  ");

$point = new Point($x, $y);

$norme = $point->norme();

echo "La norme du ponit ($x,$y) est :" . $norme;
