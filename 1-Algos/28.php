<?php
/* Ecrire l'algorithme permettant d'imprimer le triangle suivant, le nombre de lignes étant donné par l'utilisateur:
1
12
123
1234
12345
*/

$nb = readline('entrer le nombre de lignes') ;

for ($i=1; $i <= $nb; $i++) { 
    //on initialise le nombre de lignes

    for ($j=1; $j <= $i ; $j++) { 
        echo $j ;
        // on affiche les nombres 
    }
    echo "\n";
}
?>