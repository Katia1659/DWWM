<?php
/* Ecrire un algorithme triant un tableau par 
    -on cherche l'élément de plus petite valeur dans le tableau
    -le placer en tête du tableau
    -recommencer avec le tableau moins la première case
        14 | 3 | 9 | 2 | 5 
            devient
        2 | 3 | 9 | 14 | 5
            puis 
        2 | 3 | 9 | 14 | 5
            devient 
        2 | 3 | 5 | 14 | 9
            puis
        2 | 3 | 5 | 9 | 14

Var min, tab, temp
    Pour i allant de 0 à count(tab)
        min = i 
            Pour j allant de 1 à count(tab)
                Si tab[j] < tab[min]
                    min = j
                FinSi
                Si min != i
                    temp = tab[min]
                    tab[min] = tab[i]
                    tab[i] = temp
                FinSi
            FinPour
    FinPour
    Pour i allant de 0 à count(tab)
        Ecrire tab[i]
    FinPour
fin
 */

 // Création du tableau tab.

 $tab = array(14,3,9,2,5);


 // Tri du tableau tab dans l'ordre croissant.

 for ($i=0; $i < count($tab); $i++) { 
     $min = $i;
     
     for ($j=$i+1; $j < count($tab); $j++) { 
         if ($tab[$j] < $tab[$min]) {
             $min = $j;
         }
     }
     if ($min != $i) {
         $temp = $tab[$min];
         $tab[$min] = $tab[$i];
         $tab[$i] = $temp;
     }
 }

 // Affichage du nouveau tableau après le tri.

 for ($i=0; $i < count($tab); $i++) { 
     echo $tab[$i].' ';
 }
?>