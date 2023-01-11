<?php
/*Ecrire un algorithme qui demande deux nombres à
l'utilisateur et l'informe ensuite si le produit est négatif ou
positif (on inclut cette fois le traitement du cas où le produit
peut être nul)

On demande deux nombres n1 et n2 à l'utilisateur puis observont si le
produit est positif négatif ou nul.
*/


$n1 = readline('Donnez le premier nombre : ');
$n2 = readline('Donnez le deuxième nombre : ');

if ($n1*$n2==0){
    echo 'Le nombre est nul';
}elseif ($n1*$n2>0){
    echo 'Le nombre est positif';
}else{
    echo 'Le nombre est négatif';
} 

?>