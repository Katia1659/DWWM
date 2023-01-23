<?php
/* Ecrire l'algorithme permettant d'imprimer le triangle suivant, le nombre de lignes étant donné par l'utilisateur : 
1
12
1234
12345
123456
1234567
*/

// Accrédite la valeur max avec l'entré d'un utilisateur
$nbMax = readline ("Entrez un nombre : ");

for ($i=1; $i <= $nbMax; $i++ ) {
    //2ème indice avec j
    for ($j = 1; $j < $i; $j++ ) {
        // affiche $j si il est plus petit que $i àla suite de celui ci
        echo $j;
    }
    // Affiche $i, à la fin de la ligne
    echo $i;
    echo PHP_EOL; 
}
?>