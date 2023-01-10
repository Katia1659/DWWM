<?php
/* Ecrire un algorithme qui demande un nombre à l'utilisateur, et l'informe ensuite si ce nombre est positif ou négatif (on inclut cette fois 
le traitement du cas où le nombre vaut zéro).
Debut
    lire a 
    lire b 
    si a>0 et b>0 ou si a<0 et b<0
        ecrire le produit es positif
    sinon 
        ecrire le produit es negatif
Fin
*/

//inisilisation des var
$a = readline('Entrez un nombre a : ');
$b = readline('Entrez un nombre b : ');

//creation des condition
if ($a == 0 or $b == 0){
    echo 'Le produit est nul';
}

else {
    if (($a > 0 and $b > 0) or ($a < 0 and $b < 0)){
        echo 'Le produit est positif';
    }

    else {
        echo 'Le produit est negatif';
    }
}
?>
