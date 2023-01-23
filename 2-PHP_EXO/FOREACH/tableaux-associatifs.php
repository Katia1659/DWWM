<?php

// 1. Affectez un tableau associatif de trois valeurs de type nombre à virgule flottante avec des clés alpanumériques à une variable

// 2. Affectez un tableau associatif de trois valeurs de type chaîne de caractères avec des clés alpanumériques à une variable

// tableau 1)
$tab1 = array(
    '1A' => 1.5,
    '2A' => 2.5, 
    '3A' => 3.5
);

// tableau 2)
$tab2 = array(
    '1B' => 'Un',
    '2B' => 'Deux',
    '3B' => 'Trois'
);

foreach($tab1 as $key => $valeur){
    echo $key.' '.$valeur.PHP_EOL;
}
echo PHP_EOL;
foreach($tab2 as $key => $valeur){
    echo $key.' '.$valeur.PHP_EOL;
}