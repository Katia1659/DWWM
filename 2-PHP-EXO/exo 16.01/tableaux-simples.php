<?php

// 1. Créez une variable avec le nom de votre choix, en respectant la syntaxe "camel case"
// et affectez-lui un tableau contenant trois nombres entiers

// 2. Même exercice avec des nombres à virgule flottante

// 3. Même exercice avec des chaînes de caractères

// 4. Même exercice avec un tableau contenant un nombre entier, un nombre à virgule flottante et une chaîne de caractères

// 1
$tabUn = array (3 , 5 , 7);
echo "tableau 1 : \n";
echo implode( PHP_EOL, $tabUn);

echo "\n"."\n";

// 2 
$tabDeux = array (3.2, 5.7, 6.2);
echo "tableau 2 : \n";
echo implode( PHP_EOL, $tabDeux);

echo "\n"."\n";

// 3 
$tabTrois = array ('un' , 'deux' , 'trois');
echo "tableau 3 : \n";
echo implode(PHP_EOL, $tabTrois);

echo "\n"."\n";

// 4 
$tabQuatre = array (15 , 17.2 , 'vingt');
echo "tableau 4 : \n";
echo implode( PHP_EOL, $tabQuatre);
?> 