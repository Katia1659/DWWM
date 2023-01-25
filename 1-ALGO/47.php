<?php
/* Donner un algorithme pour supprimer un élément donné d'un tableau d'entiers. */


// on entre un tableau et ses valeurs
$tab = array(14,3,8,45,12,258,3,45,9,2,5);

$indice = readline("Entrez l'indice de l'element a supprimer");
for ($i=$indice; $i < sizeof($tab); $i++) { 
    $tab[$i] = $tab[$i+1];
}
unset($tab[sizeof($tab)-1]);

var_dump($tab);
?>