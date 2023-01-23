<?php
/* Ecrire un algorithme qui demande un nombre de départ, et qui ensuite affiche les dix nombres suivants. Par exemple, si l'utilisateur entre le nombre 17, le programme affichera les nombres de 18 à 27.

Var nb, a;
    debut
        Ecrire "Veuillez saisir un nombre";
        Lire nb;
        a=0;
        DébutTantQue
        TantQue a<10
            a=a+1
            Ecrire nb+a
        FinTantQue
    fin
  
$nb=readline('Veuillez saisir un nombre : ');
$a=0;
while ($a < 10) {
    $a=$a+1;
    echo $nb + $a;
    echo PHP_EOL;
}    
*/

$nb=readline('Veuillez saisir un nombre : ');
$a=0;
while ($a < 10) {
    $a=$a+1;
    echo $nb + $a." - ";
}

?>