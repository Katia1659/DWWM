<?php
/*Donnez le résultat de la multiplication de deux nombres en ne
faisant que des additions.

On fait une boucle for de la taille d'un des deux nombres puis on additionne
ce nombre de fois le deuxieme nombre.
*/

//Saisie de valeur
$n1 = readline('Donnez le premier nombre : ');
$n2 = readline('Donnez le deuxième nombre : ');
//Multiplication uniquement avec des additions
for ($i=0; $i < $n2; $i++) { 
    $tot = $tot + $n1;
}
//Renvoie du résultat
echo $tot;
?>