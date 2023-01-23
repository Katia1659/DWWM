<?php

// 1. Affectez un tableau associatif de trois valeurs de type nombre à virgule flottante avec des clés alpanumériques à une variable

$tab=array (
    'histoire'=>12.50,
    'maths'=>14.75,
    'science'=> 15.00 
);

// echo $tab ['histoire'];

// 2. Affectez un tableau associatif de trois valeurs de type chaîne de caractères avec des clés alpanumériques à une variable

$tab2= array (
    '1' => 'histoire',
    '2' => 'maths',
    '3' => 'science'
);

$variable ['$tab']=$tab;

print_r($variable['$tab']);


?>