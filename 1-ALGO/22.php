<?php
//Partie A
/**A-Ecrire un algorithme qui demande successivement 20 nombres à l'utilisateurs, et qui lui dit ensuite quel est le plus grand parmi ces 20 nombres  */

echo "La partie 22-A \n";

// Déclaration de variable

$nbrMax=0;
$i=1;

// boucle while pour limiter le nombre d'ittération à 20 et garder la valeur du plus grand nombre  :
while ($i <= 20) {
   $nbr=readline("entrer le nombre n° $i : ");
   if ($nbr>$nbrMax) {
    $nbrMax=$nbr;
   }

   $i++;

}
// affichage:
print "le plus grand nombres est : $nbrMax";


//Partie B
/**B-Modifier l'algorithme pour que le programme affiche le surcroit en quelle position. */

echo "La partie 22-A \n";

// Déclaration de variable
$i=1;
$nbr=readline("entrer le nombre n° $i : ");
$nbrMax=$nbr;
$src=$i;

// incrémenter le i pour la suite  "entrer le nombre n°:$i=2 ...
$i++;

// boucle while pour limiter le nombre d'ittération à 20 et garder la position e plus grans nombre :

while ($i <= 20) {

   $nbr=readline("entrer le nombre n° $i : ");

   if ($nbr>$nbrMax) {
    $nbrMax=$nbr;
    $src=$i;
   }

   $i++;

}
// affichage:
print "le plus grand nombres est : $nbrMax , saisie à la position $src.";

?>