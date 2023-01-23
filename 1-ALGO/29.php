<?php
/**Ecrire un algorithme qui demande un nombre, calcule et affiche la somme cubique. */

echo "Début \n";

// déclaation de variable 
$nb=readline("La somme cubique de :");
$som3=0;
// boucle for pour calculer la somme cubique 
for ($i=1; $i <= $nb ; $i++) { 
  
    $tab[$i]=$i*$i*$i;
    $som3=$tab[$i]+$som3;
    if ($i == $nb){
        print  ("$i^3 = ".$som3);;

    }else{
        print  ("$i^3 + ");}

}

echo "\nfin \n";
?>