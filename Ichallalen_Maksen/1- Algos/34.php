<?php
/*Ecrivez un algorithme calculant la somme des valeurs d'un tableau
(on suppose que le tableau a été préalablement saisi).

*/

//On déclare le tableau
$tab = array( );
//On remplie le tableau
for ($i=1; $i < 6; $i++) { 
    $c += 1;
    $tab[$i] = $c;
}
//On fait la somme des valeurs du tableau
for ($i=1; $i < 6 ; $i++) { 
    $tot += $tab[$i];
}

//On affiche le tableau
for ($i=1; $i <6 ; $i++) { 
    echo $tab[$i]."\n";
}
//On affiche le total
echo ('Le total est : ');
echo $tot;
?>