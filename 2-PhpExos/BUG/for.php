<?php


// 1. Écrivez une boucle `for` qui affiche les nombres entier de 1 à 10
for ($i=0; $i <=10 ; $i++) { 
echo $i.PHP_EOL;    
}
// 2. Écrivez le code d'une boucle `for` qui affiche les valeurs du tableau suivant :
echo PHP_EOL;
$liste = array(
    'foo',
    'bar',
    'baz'
);

for ($i=0;$i < count($liste); $i++) { 
    echo $liste[$i].PHP_EOL;
}