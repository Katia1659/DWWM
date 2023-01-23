<?php 

/* Exercice 41

Ecrire l'algorithme effectuant le décalage des éléments d'un tableau.

*/


// On déclare un tableau qui forme le mot décalage
$tab = array ('D', 'E', 'C', 'A', 'L', 'A', 'G', 'E'); 

// On admet que la variable temporaire est égale à la première valeur du tableau
$temp = $tab[0];


// On créé une boucle pour comparer i avec la valeur qui le succède dans le tableau. 
for ($i = 0 ; $i < count($tab) - 1; $i++ ) {
    $tab[$i] = $tab[$i + 1];
}

// On place le D à la fin du tableau.
$tab[7] = $temp;


// On affiche le nouveau tableau
for ($i = 0 ; $i < count($tab); $i++ ) {

echo $tab[$i];

}

