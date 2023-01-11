<?php
/*Ecrire un algorithme qui demande successivement 20 nombres à
l'utilisateur, et qui lui dit ensuite quel était le plus grand parmi ces
20 nombres.

On fait une boucle for de 20 de long, par la suite on stock la donnée
la plus grande puis la renvoie à  l'utilisateur.
*/
$max = 0;
for ($i=0; $i <20; $i++) { 
    $n = readline('Donnez un nombre');    
    if ($n>$max){
        $max = $n;
    }else {
        $max = $max;
    } 
    
}
echo $max;
?>