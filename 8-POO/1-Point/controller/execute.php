<?php
include_once "../modele/Personne.class.php";
$abscisse = 1;
$ordonné = 2;
$point = new Point($abscisse, $ordonné);
$point->setAbscisse($abscisse);
$point->setOrdonné($ordonné);
$point->norme($abscisse,$ordonné);
$norme =sqrt(pow($abscisse,2)+ pow($ordonné,2));
echo "L'abscisse est sur $abscisse\n
L'ordonné est sur $ordonné\n
La norme du point ($abscisse, $ordonné) est : $norme ";
//print_r($point);

