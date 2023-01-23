<?php

/*
Ecrire un algorithme qui demande un nombre de depart, et qui calcule la somme des entiers jusqu'a ce nombre.
Par exemple, si l'on entre 5 le programme doit calculer : 1 + 2 + 3 + 4 + 5 = 15.

*/


echo "Debut";
echo "\n"; 

// demande un nombre à l'utilisateur 
$nb = readline(" entrez un nombre : ");
$somme = 0;

//additionne tout les chiffre avant celui-là
for ($i=0; $i<=$nb ; $i++) { 
    $somme = ($somme + $i);
    echo $i;
    echo ", ";
};


//affiche la somme 
echo "\n";
echo "=";
echo $somme;
echo "\n";
echo "Fin";
