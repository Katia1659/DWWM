<?php
/* Ecrire l'algorithme permettant d'imprimer le triangle suivant, le nombre de lignes étant donné par l'utilisateur:
    1
    12
    123
    1234
    12345
    123456
    12334567
Var

*/

$a='';
 
$n=readline('Saisissez');
for ($i=1; $i <= $n ; $i++) { 

    $a=$a.$i;
    echo $a;
    echo PHP_EOL;
      
}
?>