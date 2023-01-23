<?php
/**
 * Ecrire un algorithme permettant d'imprimer le triangle suivant, le nombre de lignes étant donné par l'utilisateur:
 */

echo "Début \n";
$tab=array();
// déclaration de variable 
$nb=readline("entrer un nombre :");

// boucle for a chaque itération le tableau se remplie par les valeurs de i selon nb ligne saisie par l'utilisateur
for ($i=1; $i <= $nb ; $i++) { 
  
    $tab[$i]=$i;

    
        print implode ("",$tab)."\n";

}

echo "fin \n";
?>