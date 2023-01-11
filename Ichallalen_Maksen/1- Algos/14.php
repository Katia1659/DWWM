<?php
/*Ecrire un algorithme qui demande deux nombres à l'utilisateur et
l'informe ensuite si leur produit est négatif ou positif (on laisse de
côté le cas où le produit est nul). Attention toutefois : on ne doit
pas calculer le produit des deux nombres.


On va demander deux nombres à l'utilisateur n1 et n2, puis on va vérifier si le premier et le deuxieme sont négatifs, puis vérifier
si le premier ou le deuxieme est négatifs. 
*/

$n1 = readline('Donnez un premier nombre : ');
$n2 = readline('Donnez un deuxième nombre : ');

if ($n1<0 and $n2<0){
    echo 'Le produit est positif';
    
}elseif($n1<0 or $n2<0){
    echo 'Le produit est négatif';
}else{
    echo 'Le produit est positif';
}
    




?>