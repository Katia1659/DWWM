<?php
/*Ecrire un algorithme qui demande successivement 20 nombres à
l'utilisateur, et qui lui dit ensuite quel était le plus grand parmi ces 20 nombres

nbmax=0

pour i allant de 1a20
lire nb
i++
si nb > nbmax => nbmax = nb
*/

$nbmax=0;
for ($i=1; $i <= 20; $i++) { 
    $nb = readline("entrez nombre : ");
    if ($nb > $nbmax) {
        $nbmax = $nb;
    }
}
echo "le plus gros nombre est : ";
        echo $nbmax;
?>