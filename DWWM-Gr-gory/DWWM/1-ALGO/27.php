<?php
/* Ecrire un algorithme qui permet donner le résultat d'un étudiant à
un module sachant que ce module est sanctionné par une note
d'oral de coefficient I et une note d'écrit de coefficient 2. La
moyenne obtenue doit être supérieure ou égale à IO pour valider le
module.
Debut 
lire note oral
lire note ecrit
moyenne = (note oral + note ecrit * 2)/3
afficher moyenne
*/

// on demande les notes a l'utilisateur
$noteoral = readline("note oral = ");
$noteecrit = readline("note ecrit = ");

// on calcul et affiche la moyenne
$moyenne = (($noteecrit * 2) + $noteoral )/ 3;
echo "la moyenne est : ";
echo $moyenne;

?>