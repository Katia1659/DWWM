<?php
/* Ecrire un algorithme qui demande un nombre de départ, et qui ensuite affiche les dix nombre suivants.
 */

 // Déclaration de variable

$a = readline('Entrez un nombre : ');

// boucle incrémentation  :

for($i=1 ; $i <= 10; $i ++){
    $a++;
    echo  $a ." ; "; 
}

?>
