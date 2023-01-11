<?php
/*Toujours et encore sur le même principe, écrivez un algorithme
permettant, à l'utilisateur de saisir les notes d'une classe. Le
programme, une fois la saisie terminée, renvoie le nombre de ces
notes supérieures à la moyenne de la classe.

*/

//On définie le tableau et les variables et demande à l'utilisateur le nombre de notes.
$notes = array( );
$v = readline('Quel est le nombre de variables ? ');
$c = 0;
$tot = 0;

//On demande les notes
for ($i=1; $i <= $v; $i++) { 
    $n = readline ('Quel est la valeur ? ');
    $notes[$i] = $n;
    $tot += $n;
    
}

//On trouve le nombre de note supérieur à la moyenne de la classe
for ($i=1; $i <= $v; $i++) { 
    if ($notes[$i]>= $tot/$v) {
        $c += 1;
    }else {
        $c = $c;
    }    
    
}

//On affiche le nombre de notes supérieur à la moyenne
echo 'Le nombre de notes au dessus de la moyenne est de '.$c;



?>


