<?php

/*

afficher les nombres pairs, entre 1 et 100

rÃ©sultat attendu :

    2
    4
    6
    8
    10
    12
    14
    16
    18
    20
    ...

*/
// On utilise modulo 2 pour savoir si le nombre est pairs si oui il l'affiche.
for ($i=1; $i <= 100; $i++) { 
    if ($i%2 == 0 ) {
        echo $i.'  ';
    }
}

