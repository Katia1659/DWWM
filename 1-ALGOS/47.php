<?php

/* 

Exercice 47

Donner un algorithme pour supprimer un élément donné d'un tableau d'entiers. 

*/

$tab = array(2, 7, 8, 9, 5); 

$delete = readline ('Choisissez le rang de la valeur à supprimer');

for ($i = $delete; $i < count($tab) - 2; $i++) {

        $tab[$i] = $tab[$i + 1];
    }

for ($i = 0; $i < count($tab) ; $i++) {
    echo $tab[$i]; 
}