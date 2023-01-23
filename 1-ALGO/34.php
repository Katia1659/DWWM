<?php
/**Ecrivez un algorithme calculant des valeurs d'un tableau (on suppose que le tableau a été préalablement saisie.) */
echo "Début \n";
//  déclaration  & remplissage du tableau.

$tab=array(1,3,4,10,2);

// boucle pour calculer la somm initialisée à 0.

$som=0;
for ($i=0; $i <=sizeof($tab)-1 ; $i++) { 
    $som = $som+$tab[$i];
}

// affichage:
echo "la somme du : ".implode(' + ',$tab)." est de  = $som \n";
echo"Fin";
?>