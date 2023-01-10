<?php
/* Donner un algorithme qui prend en argument un tableau d'entiers de taille n et qui le modifie de tels sorts que tous les entiers pairs se retrouvent avant les entiers Impairs. */

// declaration tableau et valeurs
$temp = 0;
$tab = array();

// on demande le nombre de valeurs et on affiche le tableau
$n = readline("Entrez le nombre de valeurs : ");
$f = $n-1;
for ($i=0; $i < $n; $i++) {  
        $tab[$i] = random_int(0,50); 
        echo $tab[$i]." | ";
}

echo PHP_EOL;

// boucle pour le tri 
for ($i=0; $i < $f; $i++) { 

    //si la derniere valeur est impaire on pass a la valeur precedente
    while ($tab[$f]%2 != 0) {
        $f--;
    }

    // si la valeur de $tab[$i] est impaire et la valeur de $tab[$f] est pair on procede a l'echange
    if ($tab[$i]%2 != 0 and $tab[$f]%2 == 0) {
        $temp = $tab[$i];
        $tab[$i] = $tab[$f];
        $tab[$f] = $temp;
    }

    if ($i == $f) {
        if ($tab[$i]%2 != 0 and $tab[$i+1] == 0) {
            $temp = $tab[$i];
            $tab[$i] = $tab[$i+1];
            $tab[$i+1] = $temp;
        }
    }
}

// on affiche le tableau final
for ($i=0; $i < count($tab) ; $i++) { 
    echo $tab[$i]." | ";
}
?>