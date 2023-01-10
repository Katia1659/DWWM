<?php 

/* Ecrire un algoritme saissisant 2 variables entière qui calcule et affiche leur moyenne. 

Debut

declare nb1 
declare nb2 
declare moyenne

ecrire ' entrez un nombre'
lire nb1
ecrire ' entrez un autre nombre'
lire nb2
moyenne <= nb1 + nb2 / 2 

Fin

*/

// demande à l'utilisateur

$nb1 = readline("entrez un nombre : ");
$nb2 = readline("enrez un autre nombre : ");


// calcule moyenne

$moyenne = $nb1 + $nb2 / 2;

// afficher resultat 

echo $moyenne."\n";
echo "Fin";

?>
