<?php

/*Ecrire un algo constituant un tableau composé de 2 autre tableaux. Nouveaux tab = somme des éléments des tab de départ
*/

// Déclare deux tableaux
$tab1 = array (4,8,7,9,1,5,4,6);
$tab2 = array (7,6,5,2,1,3,7,4);
$tab3 = array ();



// Remplussage de tab3 avec tab1 et tab2 
for ($i = 0; $i < count($tab1); $i++) {
    $tab3[$i] = $tab1[$i] + $tab2[$i];
    echo $tab3[$i];
    echo "\n";
}

?>