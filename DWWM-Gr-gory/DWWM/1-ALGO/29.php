<?php
/* 
Ecrire un algorithme qui demande un nombre , calcule et affiche la somme cubique 

Var sommeCubique,nb : entier ;
Debut 
lire nb
pour i allant de 1 a nb
sommeCubique = sommeCubique + i^3
*/

//initialisation des variables
$sommeCubique = 0;

//on demande un nombre
$nb = readline("Entrez un nombre : ");

//on calcule la somme cubique
for ($i=1; $i <= $nb ; $i++) { 
    $sommeCubique = $sommeCubique + $i**3;
}

//on affiche le resultat
echo $sommeCubique ;
?>