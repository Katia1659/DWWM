<?php
/*Ecrire un algorithme qui demande un nombre , calcule et affiche la
somme de i**3

Pour ce faire on fait une boulce for de 3 vu que la puissance est de 3 et à chaque tour
on additionne les puissances de 0 à 3 avec le nombre donné par l'utilisateur.

*/

//Saisie de valeur
$n = readline('Donnez un nombre : ');
//Calcul de la somme des cubes
for ($i=0; $i < $n + 1 ; $i++) { 
    $compt = $compt + $i**3;
}
//revoie du résultat
echo ('Le résultat est : ');
echo "\n";
echo $compt;

?>