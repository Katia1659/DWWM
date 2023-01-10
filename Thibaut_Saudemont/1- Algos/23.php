<?php
/* 
Réécrire l'algorithme précédent, mais cette fois-ci on ne connait pas d'avance combien l'utilisateur souhaite saisir de nombres. La saisie des nombres s'arrête lorsque l'utilisateur entre un zéro.
 */

echo 'Début';
echo PHP_EOL;

// initialisation des variables en dehors de la boucle 
$i = 1;
$nbr = readline("Choisir un nombre ? ");
$pgNbr = $nbr;
// conditionnement pour que la boucle stop à 0
while ($nbr != 0) {
    $nbr = readline("Choisir un nombre ? ");
    $i++;
    // enregistrement de la place et de la plus grande valeur 
    if ($nbr > $pgNbr) {
        $pgNbr = $nbr;
        $compteur = $i;
    }
}

// affichage résultat 
echo PHP_EOL;
echo 'Le nombre le plus grand est : ' . $pgNbr . PHP_EOL;
echo 'Il etait à la place : ' . $compteur. PHP_EOL;
echo 'Fin';
