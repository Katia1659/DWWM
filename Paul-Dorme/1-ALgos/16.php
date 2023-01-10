<?php 
/* Ecrire un algo qui demande un nb à l'user et l'info ensuite si + ou - (on inclut option si = 0)
*/

$nb = readline ('Un nb ?');
if ($nb > 0) {
    echo "Votre nombre est +";

}else if ($nb < 0) {
    echo "Votre nombre est -";
    
}else {
    echo"Votre nombre est égal à 0";
}

?>