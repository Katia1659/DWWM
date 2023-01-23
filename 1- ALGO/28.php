<?php
/*
• Ecrire l'algorithme permettant d'imprimer le triangle suivant, le
nombre de lignes étant donné par l'utilisateur :
1
12
123
1234
12345
123456
1234567
*/

//inisilation des var
$i = 0;
$nb = '';
$nbEntrez = readline('Entrez la taille');

for ($i=1; $i < $nbEntrez+1 ; $i++) {
    $nb = $nb.$i;
    echo $nb;
    echo "\n";

}
?>