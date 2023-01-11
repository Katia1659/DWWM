<?php
/*Modifiez ensuite l'algorithme pour que le programme affiche de
surcroît en quelle position avait été saisie ce nombre.

On fait une boucle for de 20 de long, par la suite on stock la donnée
la plus grande puis la renvoie à  l'utilisateur. Pour trouver la 
position de la valeur on doit donc ajouter un compteur.
*/

$max = 0;
for ($i=0; $i <20; $i++) { 
    $n = readline('Donnez un nombre');    
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

