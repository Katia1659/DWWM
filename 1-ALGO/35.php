<?php
/**ecrivez un algorithme constituant un tableau, à partir de deux tableaux de même longueur préalablement saisie.
 * le nouveau tableau sera la somme des éléments des deux tableaux de départ.
 */
echo"Début \n";

// Déclaration des tableaux.

$tab1= array(4,8,7,9,1,5,4,6);
print "tableau 1 :". implode("|",$tab1)."\n";
$tab2= array(7,6,5,2,1,3,7,4);
print "tableau 2 :". implode("|",$tab2)."\n";
$tab3= array();

// boucle pour remplire tab3 par l'adittion les éléments des deux tableaux.

for ($i=0; $i < count($tab1) ; $i++) { 
    $tab3[$i]=$tab1[$i]+$tab2[$i];
}

print "tableau constutuer :". implode("|",$tab3)."\n";

echo "Fin";

?>