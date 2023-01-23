<?php
/* Ecrivez un algorithme qui permette la saisie d'un nombre quelconque de valeurs. Toutes les valeurs doivent être ensuite augmentés de 1 et le nouveau tableau sera affiché à l'écran 
*/

// création du tableau
$tab=array();

$nb=readline('Combien voulez-vous de valeurs dans votre tableau? : '); 

//
for ($i=0; $i < $nb ; $i++) { 
    $tab[$i]=readline('la valeur : ');
}

for ($i=0; $i < $nb ; $i++) { 
    echo ($tab[$i]+1).'|' ;

}

?>
