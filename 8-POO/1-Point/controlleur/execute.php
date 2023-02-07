<?php
include_once "../modele/Point.class.php";

//$taille = new Point(1,2);

//$resulNorm = $taille->Norme();


//print_r($taille);
//print_r($resulNorm);

$abscisse = readline("donne l abscisse :");
echo "\n";

$ordonne = readline("donne l'ordonne :");
echo "\n";

$taille = new Point($abscisse,$ordonne);

$res = $taille->Norme();

echo "resultat " .$res;




//$abscisse = 1;
//$ordonne = 2;


?>