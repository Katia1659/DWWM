<?php 

/*
Ecrire un algorithme qui demande un nombre, calcule et affiche la somme cube i3




*/
// demande a l'utilisateur un nombre et on initialise la somme cubique a 0
$nb = readline("entrez un nombre : ");
$cube = 0;

// calcul de la somme cubique
for ($i=1; $i <= $nb; $i++) { 
    $cube = $cube + $i ** 3;  
}

// afficher la somme cubique
echo "la somme cubique est : ".$cube."\n";

echo "fin";

?>