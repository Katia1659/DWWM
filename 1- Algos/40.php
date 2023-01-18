<?php
/* Soit un tableau T à deux dimensions (12,8) préalablement rempli de valeurs numériques. Ecrire un algorithme qui recherche la plus grande valeur au sein de ce tableau.
Var pg, ligne, tab
début 
    pg = 0 
    ligne = 0 
    Pour i allant de 0 à count(tab)
        ligne = tab[i]
            Pour j allant de 0 à count(ligne)
                Si pg<tab[i][j]
                    pg= tab[i][j]
                FinSi
            FinPour
    FinPour
    Ecrire pg
fin

*/

 // Création du tableau tab.

 $tab = array(
    array('1', '2', '3', '4', '5', '6', '7' ,'8',),
    array('1', '2', '3', '4', '5', '6', '7' ,'8',),
    array('1', '2', '3', '4', '5', '6', '7' ,'8',),
    array('1', '2', '3', '4', '5', '6', '7' ,'8',),
    array('1', '2', '3', '4', '5', '6', '7' ,'8',),
    array('1', '2', '3', '4', '5', '6', '7' ,'8',),
    array('1', '2', '3', '4', '5', '6', '7' ,'8',),
    array('1', '2', '3', '4', '5', '6', '7' ,'8',),
    array('1', '2', '3', '4', '5', '6', '7' ,'8',),
    array('1', '2', '3', '4', '5', '6', '7' ,'8',),
    array('1', '2', '3', '4', '5', '6', '7' ,'8',),
    array('1', '2', '3', '4', '5', '6', '7' ,'8',),
);

// Initialisation des variables

$pg = 0;
$ligne = 0;

// Recherche de la plus grande valeur du tableau tab.

for ($i=0; $i < count($tab); $i++) {    
    $ligne = $tab[$i];

    for ($j=0; $j < count($ligne) ; $j++) {

        if ($pg<$tab[$i][$j]) {
            $pg = $tab[$i][$j];
            
        }
    }
    
}

// Affichage de la plus grande valeur. 

echo $pg;




?>