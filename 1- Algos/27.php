<?php
/*
• Ecrire un algorithme qui permet donner le résultat d'un étudiant à
un module sachant que ce module est sanctionné par une note
d'oral de coefficient 1 et une note d'écrit de coefficient 2. La
moyenne obtenue doit être supérieure ou égale à 10 pour valider le
module.
*/

//inisialisation des Var
$noteOrale = readline('Donez la note de loral');
$noteEcrit = readline('Donnez la note de lecris');
$coefOrale = 1;
$coefEcrit = 2;

//calcul 
$moyenne = (($noteOrale*$coefOrale)+($noteEcrit*$coefEcrit))/($coefOrale+$coefEcrit);
echo $moyenne;
echo "\n";

?>
