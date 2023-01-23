<?php
/* Ecrire un algorithme qui demande un nombre à l'utilisateur, et l'informe ensuite si ce nombre est positif ou négatif (on laisse de côté le cas où le nb vaut 0)
*/

$nb = readline ('Un nb ?');
if ($nb > 0) {

    echo "Votre nombre est +";
}else {
    
    echo"Votre nombre est -";
}


?>