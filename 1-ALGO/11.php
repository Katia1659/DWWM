<?php
/* ecrire un programme qui demande un nombre a l'utilisateur,puis qui calcul et affiche le carré de ce nombre 
Var a, carre : entier ;
Debut 
    lire a              a=5         carré=?
    carré <- a*a        a=5         carré=25
Fin
*/

echo 'Debut';
echo PHP_EOL;
$a = readline('entrez un nombre :');
$carre = $a * $a;
echo 'carré = ';
echo $carre;
echo PHP_EOL;
echo 'Fin'
?>