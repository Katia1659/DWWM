<?php
/* Ecrire l'algorithme effectuant le décalage des éléments d'un tableau.
Tableau initial : DECALAGE
Tableau modifier :ECALAGED */

// Creation du tableau
$tab = array ("D", "E", "C", "A", "L", "A", "G", "E");

// Creation de $temp pour boucle 1, création de $d pour boucle 2
$temp = 0;
$d = $tab[0];

// Boucle 1, décale toutes les lettres à gauche, le 'D' disparait
for ($i = 0; $i < count ($tab) -1; $i++) {
        $temp = $tab [$i];
        $tab [$i] = $tab [$i+1];
        $tab [$i+1] = $temp;
    }

// On place le 'D' en derniere position grace à sa sauvegarde dans la variable $d
    $tab [7] = $d;

// Boucle pour l'affichage
    for ($i = 0; $i < count ($tab); $i++) {
    echo $tab[$i];
    }

?>