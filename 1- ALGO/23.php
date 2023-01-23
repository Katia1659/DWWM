<?php
/*Réécrire l'algorithme précédent, mais cette fois-ci on ne connaît
pas d'avance combien l'utilisateur souhaite saisir de nombres. La
saisie des nombres s'arrête lorsque l'utilisateur entre un zéro.

On va donc utiliser une boucle while et quand l'utilisateur rentrera 0
l'algorithme s'arretera. Sinon l'algo restera le même que précédemment.
*/

$max = 0;
$n = 1;
$i=0;
while ($n!=0) {
    $n = readline('Donnez un nombre');    
    $i = $i + 1;
    if ($n>$max){
        $max = $n;
        $compt = $i;
    }else {
        $max = $max;        
    }     
}

echo $max;
echo "\n";
echo $compt;
?>