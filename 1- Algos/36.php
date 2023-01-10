<?php
/*Toujours à partir de deux tableaux précédemment saisis, écrivez un algorithme qui calcule le schtroumpf des deux tableaux. Pour calculer le schtroumpf, il faut multiplier chaque élément du tableau par chaque élément du tableau 2, et additionner le tout.
Par exemple si l'on a : 

Tableau1 : 2 | 5 | 8 | 4
Tableau2 : 6 | 7

Le schtroumpf sera: 
6*2 + 6*5 + 6*8 + 6*4 + 7*2 + 7*5 + 7*8 + 7*4 = 247


*/


//Création et remplissage des tableaux 1 et 2
$tab1= array(2,5,8,4);
$tab2= array (6,7);

$result1=0;
$result2=0;

//Calcul du produit de la 1ere case du tableau 2 avec celles du tableau 1 et addition des résultat entre eux.
for ($i=0; $i <= 3 ; $i++) { 
    $produit = $tab2[0] * $tab1[$i];
    $result1 = $result1 + $produit;
}

//Calcul du produit de la 2eme case du tableau 2 avec celles du tableau 1 et addition des résultat entre eux.
for ($j=0; $j <= 3 ; $j++) { 
    $produit2 = $tab2[1] * $tab1[$j];
    $result2 = $result2 + $produit2;
}

//Affichage du résultat finale en additionnant les deux résultats précédents.
$resultFinal=$result1+$result2;
echo "le resultat est : " .$resultFinal;



?>