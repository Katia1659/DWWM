<?php
/**soit un tableau T à deux dimensions (12,8) prélablement rempli de valeurs numériques. ecrire un algorithme qui recherche la plus grande valeur au sein de ce tableau. */

echo "Début\n";

//Déclaration de la tableau:
$t=array(  
    array(123,115,958,1213,116,20,185,8,6,32,3914,87),
    array(183,156,981,132,160,10,385,18,26,132,114,187),
    array(212,215,298,213,126,20,825,82,26,322,124,827),
    array(112,151,981,113,116,10,851,81,16,312,114,187),
    array(112,115,198,113,116,10,815,18,16,312,114,817),
    array(1121,115,981,1113,161,101,185,81,61,321,1114,187),
    array(112,151,918,113,41161,10,85,181,16,312,1141,87817),
    array(112,115,918,1131,1161,101,815,81,61,321,114,1871),
);

//Déclaration de la variable qui va prendre la plus grande valeure:
$pg=0;

// parcour du tableau et recherche de la valeur la pus grande :
/** pour parcourire le tableau 2D j'effectue 2 boucle 
 * boucle i qui parcoure le tableau T verticalement 
 * boucle j qui à chaque itération de i elle parcoure horisontalement le contenue de 1er élèment du tableau i : 
 * *c.a.d : t[i=0] ===> t[0][j=0],t[0][j=1],t[0][j=2],t[0][j=3].....
 *          t[i=1] ===> t[1][j=0],t[1][j=1],t[1][j=2],t[1][j=3].....  
 */
for ($i=0; $i < sizeof($t) ; $i++) { 

    for ($j=0; $j <sizeof($t[$i]) ; $j++) {

        if ($t[$i][$j]>$pg){

            $pg=$t[$i][$j];
            
        }     
    }
   
}

echo " La plus grande valeure dans le tableau T est : $pg\n ";

echo 'Fin';

?>