<?php
/*Ecrire un algorithme qui demande un nombre de départ, e qui
calcule la somme des entiers jusqu'à ce nombre. Par exemple, si
l'on entre 5, le programme doit calculer : I + 2 + 3 + 4 + 5 = 15


Pour ce faire on va demander à l'utilisateur un nombre n puis 
crée une boucle qui additionnera tous les entiers jusqu'au nombre n.
*/

$n = readline('Donnez un nombre : ');

for ($i=0; $i <$n+1 ; $i++) { 
    $resultat = $resultat+$i;  
}
echo $resultat; 


?>