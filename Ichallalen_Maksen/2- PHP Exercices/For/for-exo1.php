<?php

/*

afficher les nombres pairs, entre 1 et 100

résultat attendu :

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
//On affiche tous les nombres divisible par 2
for ($i=0; $i <100 ; $i++) { 
    if ($i%2==0) {
        echo $i."\n";
    }
}

//Une autre méthode en mettant le pas de deux en deux
// for ($i=0; $i <100 ; $i+=2) { 
//     echo $i."\n";    
// }


?>