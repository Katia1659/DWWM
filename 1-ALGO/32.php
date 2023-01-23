<?php
/**Ecrire un algorithme qui déclare un tableau de 9 notes, dont on fait ensuite saisir les valeurs par utilisateur. */

echo "Début \n";

// un boucle pour remplire le tableau:

for ($i=1; $i <=9 ; $i++) { 
    $tab[$i-1]= readline(" entrer la note numéro $i >> ");
}

// affichage
echo 'tableau des notes: '. implode("|",$tab)."\n";

echo"Fin";
?>