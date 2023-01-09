<?php
/**réecrire l'algorithme précédent, mais cette fois-ci on ne connait pas d'avance combien l'utilisateurs souhaite saisir de nombre. la saisie d'arrçete lorsque l'utilisateur entre un zéro  */

// Déclaration de variable

$src=0;
$i=1;
$nbr=readline("entrer le nombre n° $i : ");
$nbrMax=$nbr;
$i++;

//  while pour limiter arreter la boucle quand l'utilusateur entre 0  :

while ($nbr!= 0) {
    $nbr=readline("entrer le nombre n° $i : ");
   if ($nbr>$nbrMax) {
    $nbrMax=$nbr;
    $src=$i;
   }
   

   $i++;

}
// Affichage :


print "le plus grand nombres est : $nbrMax , saisie à la position $src.";

?>