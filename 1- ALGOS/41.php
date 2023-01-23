<?php
/*Ecrire l'algorithme effectuant le décalage des éléments d'un
tableau.

Décalage de 1 vers la gauche, la valeur 0 passe à la valeur max du tableau.

*/

//On définie le tableau et les variables
$tab = array('D','E','C','A','L','A','G','E' );
$tempmax = '';

//On sauvegarde la première valeur du tableau
$temp = $tab[0];
//On fait le décalage des variables du tableau
for ($i=0; $i < count($tab); $i++) { 
    if ($i != count($tab)-1) {
        $tab[$i] = $tab[$i + 1];        
    }else {
        $tab[$i] = $temp;
    }       
}

//On affiche le nouveau tableau avec le décalage
for ($i=0; $i <count($tab) ; $i++) { 
    echo $tab[$i];
}


?>
