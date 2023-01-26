<?php
/*
Ecrire l'algorithme effectuant le décalage des éléments d'un tableau.
Tableau initial                                 |d|e|c|a|l|a|g|e|
Tableau modifié (décalage à gauche)             |e|c|a|l|a|g|e|d|
*/

// declaration du tableau
$tab = array("D","E","C","A","L","A","G","E");

//on declare un variable temp qui prend la premiere valeur du tableu(qu'on remettra en dernier)
$temp = $tab[0];


// boucle pour le decalage des valeurs
for ($i=0; $i < sizeof($tab); $i++) { 
    // on met le cas de la derniere valeur du tableau(qui ne pouura pas prendre la valeur suivante)
    if ($i == sizeof($tab)-1) {
        $tab[$i] = $temp;
        }
    // sinon pour le reste de la boucle
    else {
        $tab[$i] = $tab[($i+1)];
    }
}

//on affiche le tableau
for ($i=0; $i < sizeof($tab) ; $i++) { 
    echo $tab[$i]." ";
}
?>