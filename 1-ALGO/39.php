<?php
/*Toujours et encore sur le même principe, écrivez un algorithme permettant, à l'utilisateur de saisir les notes d'une classe.
Le programme, une fois la saise terminée, renvoie le nombre de ces notes supérieurs à la moyenne de la classe.
*/

//On déclare le tableau et les différents variables
$nb = readline('indiquer le nombre de notes dans le tableau: ');
$tab = [];
$total = 0 ;

//on rentre les valeurs du tableau et on calcule le total
for ($i=0; $i < $nb; $i++) { 
    $tab [$i] = readline('entrer la note à l index ' . $i . ': ') ;
    $total += $tab[$i] ;
}

//On calcule la moyenne
$moyenne = $total / $nb ;

// On cherche le nombre de notes > à la moyenne
$sup = 0 ;
for ($i=0; $i < $nb; $i++) { 
    if ($tab[$i] > $moyenne) {
        $sup = $sup + 1 ;
    }
}

echo "il y a " . $sup . " au dessus de la moyenne." ;
?>