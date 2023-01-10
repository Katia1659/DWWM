<?php

/*
Ecrire un algorithme qui demande un nombre de départ, et qui cacule sa factorielle.
*/

//demande à l'utilisateur un nombre
$nb = readline("entrez un nombre");
$fact = 1;

//calcule la factorielle de ce nombre
for ($i=1; $i <= $nb; $i++) { 
    $fact = ( $fact * $i);
    echo $fact ;
    echo ", ";  
}

echo "\n";
echo "Fin";

?>