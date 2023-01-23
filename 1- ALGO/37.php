<?php
/*Ecrivez un algorithme qui permette la saisie d'un nombre
quelconque de valeurs. Toutes les valeurs doivent être ensuite
augmentés de 1 et le nouveau tableau sera affiché à l'écran.

*/
//On déclare les tableaux
$tab1 = array( );
$tab2 = array( );
//On demande à l'utilisateur la taille de son tableau
$v = readline('Quel est le nombre de variables ? ');
//L'utilisateur remplie son tableau, et l'algo ajoute donc un à son tableau
for ($i=0 ;$i < $v+1; $i++) { 
    $n = readline ('Quel est la valeur ? ');
    $tab1[$i] = $n;
    $tab2[$i] = $n+1;
}

//On affiche les deux tableaux
for ($i=1; $i <$v+1 ; $i++) { 
    echo $tab1[$i].'   '.$tab2[$i]."\n";
}


?>