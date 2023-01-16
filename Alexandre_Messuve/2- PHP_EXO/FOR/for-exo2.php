<?php

/*

afficher les nombres divisibles par 3, entre 1 et 100

rÃ©sultat attendu :

    3
    6
    9
    12
    15
    18
    21
    24
    27
    30
    ...

*/
// On utilise modulo 3 pour savoir si le nombre est divisible par 3 si oui il l'affiche.
for ($i=1; $i<=100 ; $i++) { 
    if ($i %3 == 0) {
        echo $i.'  ';
    }
}