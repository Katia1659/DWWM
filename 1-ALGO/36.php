<?php
/* 
Toujours à partir de deux tableaux précédemment saisis, écrivez un algorithme qui calcule le schtroumpf des deux tableaux. 
Pour calculer le schtoumpf, il faut multiplier chaque élément du tableau 1 par chaque élément du tableau 2 et additionner le tout.

création des tableaux 

faire une boucle dans une boucle 

*/

echo 'Début';
// création des tableaux
$tab = array(2, 5, 8, 4);
$tab2 = array(6, 7);
$miniStroumpf = 0;

for ($i = 0; $i <= 3; $i++) {
    for ($j = 0; $j <= 1; $j++) {
        $miniStroumpf = $tab[$i] * $tab2[$j];
        $stroumpf = $stroumpf + $miniStroumpf;
    }
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
echo PHP_EOL . 'Le total est de : ' . PHP_EOL . $stroumpf . PHP_EOL;

echo PHP_EOL;
echo 'Fin';
