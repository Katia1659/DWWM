<?php
/**ecrivez un algorithme qui permette la saisie d'un nombre quelqconque de valeur.
 * Toutes les valeurs doivent être ensuite augmentées de 1 le nouveau tableau sera affiché à l'écran.
 */

 echo "Début \n";

//  Déclaration des variables :
$tab=array();

// La boucle:
$n =readline("combien voulez vous entrer de Valeurs ?: ");
for ($i=1; $i <=$n ; $i++) { 
    $tab[$i] = readline("valeur n°: $i = ");
    $tab[$i]=$tab[$i] +1;
}
//Affichage
print "tableau constituer :". implode("|",$tab)."\n";

echo "Fin"
?>