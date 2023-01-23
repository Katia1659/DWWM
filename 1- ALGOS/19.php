<?php

/*
Ecrire un algrithme qui demande un nombre de départ, et qui ensuite affiche les dix nombres suivants.
Par exemple, si l'utilisateur entre le nombre 17, le programme afichera les nombres de 18 à 27.
*/

echo "Debut";
echo "\n";

//demande à l'utilisateur un nombre 
$nb = readline(" entrez un nombre : ");

//la boucle affichera les 10 nombres suivants
for ($i=0; $i <10 ; $i++) {
   $nb++;  
   echo $nb ;
   echo "| ";
   
};


echo "\n";
echo "Fin";
echo "\n";

?>

