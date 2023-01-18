<?php
/* 
- Ecrire l'algorithme effectuant le décalage des éléments d'un tableau.
- Tableau inital :  D | E | C | A | L | A | G | E
- Tableau modifié (décalage à gauche):   E | C | A | L | A | G | E | D
Var tab, temp
début 
    temp=tab[0]
    Pour i allant de 0 à count(tab)-2
        tab[i] = tab[i+1]
    FinPour
    tab[count(tab)-1] = temp
    Pour i allant de 0 à count(tab)-1
        Ecrire tab[i]
    FinPour
fin
*/


// Création du tableau tab et initialisation des variables.

$tab = array ('D','E','C','A','L','A','G','E'); 
$temp= $tab[0]; 

// Déplacament de la première case du tableau à la fin. 

for ($i=0; $i <= count($tab) - 2; $i++) {
    $tab[$i] = $tab[$i + 1];
}

$tab[count($tab) - 1] = $temp;

// Affichage du nouveau tableau.

for ($i=0; $i <= count($tab) -1 ; $i++) {
    echo $tab[$i];
}


?>