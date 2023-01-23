<?php
/* Ecrire un algorithme qui demande un nombre de départ, et qui calcule la somme des entiers jusqu'à ce nombre. Par exemple, si l'on entre 5, le programme doit calculer
 :1 + 2 + 3 + 4 + 5 = 15
*/
$i = 1;
$somme = 0;
for ( $nb = readline ( "Entrez un nombre : " ); $i <= $nb ; $i ++ ) {
    if ($i < $nb) {
        $somme = $somme + $i;
        echo "$i + ";
    }
        elseif ($i = $nb) {
            $somme = $somme + $i;
            echo "$i + = $somme";
            
        }
}
?>