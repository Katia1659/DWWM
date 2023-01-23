<?php
/*
Ecrire l'algorithme effectuant le decalage des element d'un tableau.
*/



//creation tableau 
$tabs = array("D", "E", "C", "A", "L", "A", "G", "E");
$temps = $tabs[0];
//creation de la boucle fort pour se deplacer dans le tableau ($tabs)

    for ($i=0; $i < sizeof($tabs) - 1; $i++) {
        $tabs[$i] = $tabs[$i+1];

}
$tabs[sizeof($tabs)-1] = $temps;

for ($i=0; $i < sizeof($tabs) ; $i++) { 
    echo $tabs[$i];
}
$temps = '';
$tabs[0] = $temps;
?>