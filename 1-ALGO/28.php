<?php
/* 
Ecrire l'algorithme permettant d'imprimer le triangle suivant, le nombre de lignes étant donné par l'utilisateur 
1
12
123
1234
12345
123456
1234567 

donner un nombre
lire nbr
préparer un tableau de 1 à nbr avec une boucle 

boucle pour i de 1 a nbr
afficher le nombre de cases correpondant à i tableau 

*/

echo 'Début';
echo PHP_EOL;
// initialisation des variables 
$nbr = readline("Choisir un nombre de ligne ");

echo PHP_EOL;


// remplir le tableau et afficher une case par une case
// for ($i = 1; $i < $nbr; $i++) {
//     $tab[$i] = $i;
//     echo implode ("",$tab);
//     echo PHP_EOL;
// }

// double boucle, qui montre le i et l'autre qui augmente les chiffres un par un 
for ($i = 1; $i <= $nbr; $i++) {
    echo PHP_EOL;
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
}

echo PHP_EOL;
echo 'Fin';
