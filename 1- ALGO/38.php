<?php
/*Ecrivez un algorithme permettant, toujours sur le même principe, à
l'utilisateur de saisir un nombre déterminé de valeurs. Le
programme, une fois la saisie terminée, renvoie la plus grande
valeur en précisant quelle position elle occupe dans le tableau. On
prendra soin d'effectuer la saisie dans un premier temps, et la
recherche de la plus grande valeur du tableau dans un second
temps.

*/

//On définie le tableau et les variables
$tab1 = array( );
$v = readline('Quel est le nombre de variables ? ');
$max = 0;
$p = 0;
$c = 0;

//L'utilisateur remplie le tableau
for ($i=1;$i < $v+1; $i++) { 
    $n = readline ('Quel est la valeur ? ');
    $tab1[$i] = $n;
}

//On cherche la plus grande valeur et sa postition
for ($i=1; $i <=count($tab1) ; $i++) { 
    $c += 1;
    if ($tab1[$i]>$max) {
        $max = $tab1[$i];
        $p = $c;
    }else {
        $max = $max;
        $p = $p;
    }
    
}

echo 'La valeur max est '.$max.' ,sa position est '.$p;







?>

