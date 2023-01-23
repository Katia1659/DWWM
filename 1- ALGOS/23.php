<?php

/*
Modifier ensuite l'algorithme pour que le programme affiche de surcroit en quel position avait été saisis ce nombre

*/
// initialisation des valeurs
$x = 0;
$pos = 0;
$demande = 1;
$i = 0; 

// tant que c'est different de 0 la boucle continue
// recherche la position du plus grand aussi 
while ($demande <> 0) {
    $demande = readline("donnez des nombres : ");
    $i ++;
    if ( $demande > $x ) {
        $x = $demande;
        $pos = $i;
    }   
}

// affiche les resultat du plus grand et sa position 
echo "\n";
echo "le plus grand est des nombres est : ";
echo $x;
echo "\n";
echo "et sa position est : ";
echo $pos; 
echo "\n";
echo "Fin";

?>