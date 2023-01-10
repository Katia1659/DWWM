<?php
/* Réecrire l'algorithme précédent, mais cette fois-ci on ne connait pas d'avance combien l'utilisateur souhaite saisir de nombres. La saisie des nombres s'arrete lorsque l'utilisateur entre un zéro."
*/
$i = 1;
$iBigger = 1;
$nb = readline ("$i)Entrez un nombre : ");
$nbBigger = $nb;
$i ++;
while ($nb !=0) {
    $nb = readline ("$i)Entrez un nombre : ");
    $i ++;
    if ($nb > $nbBigger) {
        $nbBigger = $nb;
        $iBigger = $i;
    }
}
    echo "Votre nombre le plus élevé est le $nbBigger en $iBigger ième position";

?>
