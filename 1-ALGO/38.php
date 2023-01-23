<?php
/**Ecrivez un algorithme permettant, toujours sur le même principe, à l'utilisateur de saisir un nombre déterminé de valeurs.
 * Le programme, une fois la saisie terminée, renvoie la plus grande valeur en précisant quelle position elle occupe dans le tableau.
 * On prendra soin d'effectuer la saisie dans un premier temps, et la recherche de la plus grande valeur du tableau dans un second temps.
*/

echo "Début \n";

//  Déclaration des variables :
$tab=array();
$pg=0;
$k=0;

// La boucle:
$n =readline("combien voulez vous entrer de Valeurs ?: ");
for ($i=1; $i <=$n ; $i++) { 
    $tab[$i] = readline("valeur n°: $i = ");
    $tab[$i]=$tab[$i] +1;
}
echo "\n";
// Chercher la plus grande valeur et sa position :
for ($i=1; $i <=sizeof($tab) ; $i++) { 
    if ($tab[$i]>$pg) {
        $pg=$tab[$i];
        $k=$i;
    }
    
}
//Affichage
print "la plus grande valeur est $pg saisie à la position $k \n";
echo "Fin"
?>