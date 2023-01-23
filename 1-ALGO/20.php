<?php
/*ecrire un algorithme qui demande un nombre de départ, et qui calcule la somme des entiers jusqu'à ce nombre.

variable nbr1,nbr, i en entier
Début 
ecrire "Donnez un nombre"
lire nbr 
nbr1=0;
pour i allant de 1 à nbr faire 
i+1;
ecrire "i"+"+";
nbr1= nbr1+i;
fin pour 
fin

*/

echo 'Début';
echo "\n";
// Déclaration de variable
$nbr= readline('Entrer un nombre: ');
$nbr1=0;

// la somme des antier jusqu'au nbr entrer :

for ($i=1; $i <= $nbr ; $i++) { 
      $i+1;
    echo "$i";

    if ($i != 5) {echo " + ";}

    $nbr1=$i+$nbr1;
}

print " = $nbr1";
echo "\n";
echo 'Fin';
?>