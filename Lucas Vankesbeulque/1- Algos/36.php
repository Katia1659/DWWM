<?php
/* toujours à partir de deux tableaux précédemment saisis, ecrivez un algorithme qui calcule le schtroumpf des deux tableaux? pour calculer le schtroumpf, il faut multiplier chaque élément du tableau 1 par chaque élément dy tableau 2, et additionner le tout? par exemple si l'on a :

*/
// initialisation des tableau
$tab = array('2','5','8','4');
$tab2 = array('6','7');

//declarer la somme a 0
$s=0;

//boucle for pour traverser le 1er tableau
for ($i=0; $i < count($tab); $i++) { 
//2eme boucle pour parcourir le 2eme tableau
    for($j = 0;$j <count($tab2);$j++){ 
//calcul des deux tableaux 
        $s= $s + $tab[$i] * $tab2[$j];
        }  
}
echo 'la somme est : '. $s;

