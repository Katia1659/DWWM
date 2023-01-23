<?php
/*
Donnez le résultat de la multiplication de deux nombres en ne
faisant que des additions.
*/

//inisialisation des var
$nb = readline('donnez un nb');
$multiplicatur = readline('donnez le multiplacateur');
$somme = 0;

for ($i=0; $i < $multiplicatur ; $i++) { 
    $somme += $nb;
}
echo $somme
?>