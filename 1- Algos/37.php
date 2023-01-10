<?php
/*
Ecrivez un algorithme qui permette la saisie d'un nombre
quelconque de valeurs. Toutes les valeurs doivent être ensuite
augmentées de 1 et le nouveau tableau sera affiché à l'écran.
*/
//declaration des tableau
$tab = array();


//demander le nombre de valeurs dans le tableau
$nb = readline("Entrez le nombre de valeurs : ");
//boucle pour le premier tableau
for ($i=0; $i < $nb ; $i++) { 
    $tab[$i] = readline('entrez valeur : ' );
    
}

//boucle pour afficher tab2
for ($i=0; $i < $nb ; $i++) { 
    //remplissage de tab2 en fonction de tab
    $tab[$i] = $tab[$i]+1 ;
    echo $tab[$i].'|';
}

?>