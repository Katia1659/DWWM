<?php 

/* Exercice 37 

Ecrivez un algorithme qui permette la saisie d'un nombre quelconque de valeurs. Toutes les valeurs doivent être ensuite augmentées de 1, et le nouveau tableau sera affiché à l'écran.

*/

// On demande à l'utilisateur de saisir le nombre de valeurs qu'il veut incorporer dans le tableau.

$nbValeurs = readline('Saisissez le nombre de valeurs que vous souhaitez saisir : ');

// On demande à l'utilisateur de saisir les éléments du tableau.

for ($i = 1; $i <= $nbValeurs; $i++) {
    $tab[$i] = readline("Saisissez la valeur numéro $i : ");
    $tab2[$i] = $tab[$i] + 1;
}

// On affiche les éléments du premier tableau.

for ($i = 1; $i <= $nbValeurs; $i++) {
    echo $tab[$i];
    echo " ";
}

// On affiche les éléments du second tableau, dans lequel on ajoute 1 aux valeurs du précédent tableau. 

echo "\n";
for ($i = 1; $i <= $nbValeurs; $i++) {
    echo $tab2[$i];
    echo ' ';
}



