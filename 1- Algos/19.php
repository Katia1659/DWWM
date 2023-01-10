<?php
/*
• Ecrire un algorithme qui demande un nombre de départ, et qui
ensuite affiche les dix nombres suivants. Par exemple, si
l'utilisateur entre le nombre 17, le programme affichera les
nombres de 18 à 27.

debut
    nb = lire
    nbDeux = nb+9 
    tanque nb < nb+10
        nb+1
        ecrire nb
fin
*/

//inisilisation des var
echo 'debut';
echo "\n";
$nb = readline('entrez un nb ');
$nbDeux = $nb+9;
echo $nb;

//creation d'une boucle while
while ($nb < $nbDeux) {
    $nb = $nb+1;
    echo ' ';
    echo $nb;
    echo ' ';
}
?>