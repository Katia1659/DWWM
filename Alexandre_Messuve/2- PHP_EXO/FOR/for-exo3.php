<?php

/*

afficher les nombres non divisibles par 3, entre 1 et 100

rÃ©sultat attendu :

    1
    2
    4
    5
    7
    8
    10
    11
    13
    14
    ...

*/
// On utilise modulo 3 pour savoir si le nombre est divisible par 3 si non  il l'affiche.
for ($i=1; $i <=100 ; $i++) { 
    if ($i%3 != 0) {
        echo $i.'  ';
    }
}