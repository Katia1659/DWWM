<?php
/* Donner un algorithme pour supprimer un élément donné d'un tableau d'entiers.
*/

$tab = array (14, 3, 9, 2, 5);

$nb = readline("entrer l'index de la valeur à supprimer: ");

//on écrase la valeur deemandé par la suivante et on décale d'un index tout le reste du tableau
for ($i = $nb; $i < count($tab); $i++) { 
    $tab[$i] = $tab[$i + 1] ;
}

//on affiche le tableau
for ($i=0; $i < count($tab); $i++) { 
    echo $tab[$i] . "\n" ;
}

unset($tab[count($tab) -1]);

print_r($tab);
?>