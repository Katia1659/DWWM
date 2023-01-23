<?php
/* 
- Ecrire l'algorithme effectuant le décalage des éléments d'un tableau 
- Tableau initial DECALAGE 
- Tableau modifié ECALAGED
 */

echo 'Début';
echo PHP_EOL;

// initialisation des variables
$tab = array('D', 'E', 'C', 'A', 'L', 'A', 'G', 'E');
$temp = $tab[0];

// affichage du premier tableau 
for ($i = 0; $i < sizeof($tab); $i++) {
    echo $tab[$i] . ' ';
}
echo PHP_EOL;

// déplacement des lettres
for ($i = 0; $i < sizeof($tab) - 1; $i++) {
    $tab[$i] = $tab[$i + 1];
}

// intervention de la variable temp
$tab[7] = $temp;

// affichage du tableau 
for ($i = 0; $i < sizeof($tab); $i++) {
    echo $tab[$i] . ' ';
}


echo PHP_EOL;
echo 'Fin';
