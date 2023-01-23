<?php
/*
• Ecrire un algorithme saisissant 2 variables entières qui calcule et
affiche leur moyenne.
*/
echo 'debut';
echo "\n";

//inisilisation des var
$valeurUne = '';
$ValeurDeux = '';
$resultat = '';
$valeurUne = readline('donnez une valeurs');
$valeurDeux = readline('donnez une deuxieme valeurs');
$resultat = $valeurUne / $valeurDeux;

echo "\n";
echo 'la moyenne des deux valeurs et ' . $resultat;


?>