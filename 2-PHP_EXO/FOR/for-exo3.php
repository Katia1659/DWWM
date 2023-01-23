<?php

/*

afficher les nombres non divisibles par 3, entre 1 et 100

résultat attendu :

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

for ($i=0; $i <=100 ; $i++) { 
    if ($i%3 != 0) {
        echo $i . "\n" ;
    }
}

// Utiliser un % "modulo" (équivalent d une division euclidienne) pour vois si il y a un reste après la division par 3. 
// Si égal à 0 alors c est divisible par 3.