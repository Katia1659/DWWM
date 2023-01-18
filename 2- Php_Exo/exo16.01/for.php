<?php


// 1. Écrivez une boucle `for` qui affiche les nombres entier de 1 à 10

// 2. Écrivez le code d'une boucle `for` qui affiche les valeurs du tableau suivant :

$liste = array(
    'foo',
    'bar',
    'baz'
);

//creation de la boucles for allant de 1 a 10
for ($i=0; $i < 10 ; $i++) { 
    echo $i+1;
}

echo "\n";

//creation de for pour parcourir le tableau
for ($i=0; $i < sizeof($liste) ; $i++) {
    echo $liste[$i]."\n" ;
    
}
