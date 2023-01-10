<?php 
/* Ecrire un programme qui demande un nombre à l'utilisateur puis calcule et affiche le carré de ce nombre

Var Nb, Carré

Lire "Entrez un nb"
Nb <- 0
Carré <- Nb*Nb
Ecrire (Nb)
Ecrire (Carré)

*/

$nb = (int)readline('Entrez un nombre :');
$carré = $nb*$nb;
echo 'nb = '.$nb."\n";
echo 'carré = '.$carré;

?>