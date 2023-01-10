<?php 
/* Ecrire un algo qui demande un nb de départ et qui calcule la somme  des entiers de ce nb 
*/

$nb = readline ('Entrez un nombre');
$sum=0;

for ($i=1; $i <= $nb; $i++) { 
    $sum=$sum+$i;
}

echo $sum;


?>