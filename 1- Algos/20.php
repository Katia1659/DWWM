<?php
/*
• Ecrire un algorithme qui demande un nombre de départ, et qui 
calcule la somme des entiers jusqu'à ce nombre. Par exemple, si
l'on entre 5, le programme doit calculer : 1 + 2 + 3 + 4 + 5 = 15

*/

//inisilisation des var
echo 'debut';
$nb = readline('entrez un nb');
$nbSomme = 0;

//creation de la boucle for
for ($i=0; $i <= $nb ; $i++) {  
    $nbSomme = ($nbSomme + $i);
    
}
echo $nbSomme;
?>