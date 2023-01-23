<?php


// 1. Écrivez une boucle `for` qui affiche les nombres entier de 1 à 10
for ($i=1; $i <= 10; $i++){
    echo $i;
    echo "\n";
}
// 2. Écrivez le code d'une boucle `for` qui affiche les valeurs du tableau suivant :

$liste = array(
    'foo',
    'bar',
    'baz'
);

for ($i=0; $i < count($liste); $i++) {
    echo $liste[$i]."\n";
}
