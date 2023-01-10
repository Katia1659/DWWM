<?php
/*
Toujours à partir de deux tableaux précédemment saisis, écrivez
un algorithme qui calcule le schtroumpf des deux tableaux. Pour
calculer le schtroumpf, il faut multiplier chaque élément du
tableau 1 par chaque élément du tableau 2, et additionner le tout.
Par exemple si l'on a :
*/

$resultat = 0;
$resultatA = 0;
$resultatB = 0;
$resultatF = 0;
$tabs = array(2, 5, 8, 4);
$tabsDeux = array(6, 7);
$resultat = '';
//on declare la boucle for 
for ($i=0; $i < sizeof($tabs) ; $i++) {
    $resultat = $tabsDeux[0]*$tabs[$i];
    $resultatA = $resultatA + $resultat;


}
for ($i=0; $i < sizeof($tabs) ; $i++) {
    $resultatDeux = $tabsDeux[1]*$tabs[$i];
    $resultatB= $resultatB + $resultatDeux;
    
}
$resultatF = $resultatA + $resultatB;
echo $resultatF;

?>