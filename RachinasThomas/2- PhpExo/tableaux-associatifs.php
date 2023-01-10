<?php

// 1. Affectez un tableau associatif de trois valeurs de type nombre à virgule flottante avec des clés alphanumériques à une variable

// 2. Affectez un tableau associatif de trois valeurs de type chaîne de caractères avec des clés alphanumériques à une variable

//declaration table virgule flotante
$tabAssos = array(
   'c2' => 6.5,
   'p3' => 7.2,
   'a1' => 8.2
);

//declaration table chaîne de caractère
$tabAssos2 = array(
    'c5' => 'carrote',
    'p2' => 'pomme',
    'a3' => 'abricot'
);

//affichage table virgule flottante
echo "vigule flotante : "."\n";
foreach ($tabAssos as $key => $value) {
    echo $key." | ".$value."\n";
}

//affichage table chaîne de caractère
echo "\n"."chaîne de caratère : "."\n";
foreach ($tabAssos2 as $key => $value) {
    echo $key." | ".$value."\n";
}

?>