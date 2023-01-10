<?php
/* 
Ecrivez un algorithme constituant un tableau à partir de deux tableaux de même longueur préalablement saisis. 
LE nouveau tableau sera la somme des éléments des deux tableaux de départ.


*/

echo 'Début';
// création des tableaux
$tab = array(4, 8, 7, 9, 1, 5, 4, 6);
$tab2 = array(7, 6, 5, 2, 1, 3, 7, 4);
$tab3 = array();

//addition des tableaux 
for ($i = 0; $i <= 7; $i++) {

    $tab3[$i] = $tab[$i] + $tab2[$i];
}
//affichage 

echo PHP_EOL . 'tableau numéros 1' . PHP_EOL;;
for ($i = 0; $i < sizeof($tab); $i++) {
    echo $tab[$i] . " ";
}
echo PHP_EOL . 'tableau numéros 2' . PHP_EOL;;
for ($i = 0; $i < sizeof($tab2); $i++) {
    echo $tab2[$i] . " ";
}
echo PHP_EOL . 'tableau numéros 3' . PHP_EOL;;
for ($i = 0; $i < sizeof($tab3); $i++) {
    echo $tab3[$i] . " ";
}
echo PHP_EOL;
echo 'Fin';

echo 'Fin';
