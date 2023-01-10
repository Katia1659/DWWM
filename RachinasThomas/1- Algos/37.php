<?php


/*
Ecrivez un algorithme qui permet la saisie d'un nombre quelconque de valeurs. toutes les valeurs doivent etre ensuite augmentées de 1.
et le nouveau tableau sera affiché a l'ecran.



*/


//demande a l'utilisateur de donner la longueur du tableau

$nb = readline("combien voulez vous de valeurs");
$tab1 = array();

// demande à l'utilisateur de donner les valeurs du tableau

for ($i=0; $i <= $nb - 1; $i++) {     
    $tab1[$i] = readline("entrez un numero : ");
}

//affiche le tableau et incremente le tableau 

for ($i=0; $i <= $nb - 1 ; $i++) { 
    echo ($tab1[$i]+1).'|';
}

?>
