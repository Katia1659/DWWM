<?php

/*

afficher les nombres divisibles par 3, entre 1 et 100

résultat attendu :

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

//On affiche tous les nombres divisible par 3
for ($i=0; $i <100 ; $i++) { 
    if ($i%3==0) {
        echo $i."\n";
    }
}

?>