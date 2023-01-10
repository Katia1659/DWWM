<?php 
/*Ecrire un algorithme qui demande deux nombres à l'utilisateur et l'informe ensuite si leur produit est négatif ou positif (laisee de côté zéro) Attention on ne calcule pas produit de 2 nombres
*/

$nbuno = readline('Premier nomnbre ?');
$nbdos = readline('Deuxième nombre ?');


if (($nbuno > 0 and $nbdos > 0) or ($nbuno < 0 and $nbdos <0)) {

    echo "Votre nombre est +";

}else {
    
    echo"Votre nombre est -";
}

?>