<?php
/* 
Quel résultat produit le programme suivant ? 
algorithme double;
Var val, Double : entier 

début 
Val < 231;
Double < val * 2;
Ecrire (Val);
Ecrire (Double);
fin

Val = ?; 
Double = ?;
*/


echo 'Début';
echo PHP_EOL;

// initialisation des variables
$a = 231;

// affichage de la premiere valeur 
echo 'Le nombre simple est : ' . $a . PHP_EOL;

// Calcul 
$a = $a * 2;

// affichage de la valeur doublée
echo 'Le double de ce nombre : ' . $a . PHP_EOL;

echo 'Fin';
