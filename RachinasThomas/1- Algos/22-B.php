<?php

/*
Modifier ensuite l'algorithme pour que le programme affiche de surcroit en quel position avait été saisis ce nombre

*/

//initialisation des variables
$x = 0;
$pos = 0;

// demande à l'utilisateur 20 nombres et recherche la pos du plus grand 
for ($i = 1 ; $i <=20 ; $i++) { 
    $demande = readline("donnez 20 nombres : ");

    if ( $demande > $x ) {
        $x = $demande;
        $pos = $i;
    }
}

// afiche le plus grand et sa position
echo "\n";
echo "le plus grand est des 20 nombres est : ";
echo $x;
echo "\n";
echo "et sa position est : ";
echo $pos; 
echo "\n";
echo "Fin";

?>