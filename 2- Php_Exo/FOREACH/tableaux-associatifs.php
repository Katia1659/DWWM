<?php

// 1. Affectez un tableau associatif de trois valeurs de type nombre à virgule flottante avec des clés alpanumériques à une variable

// 2. Affectez un tableau associatif de trois valeurs de type chaîne de caractères avec des clés alpanumériques à une variable

    echo '----'."\n";

//tableau
$tabs = array( 
    'a1' => 1.2,
    'b2' => 1.3,
    'c3' => 1.3);
    foreach ($tabs as $key => $value) {
        echo $key."|";
        echo $value."\n";
    }

    echo '----'."\n";

    //tablea
$tableau = array( 
    'a2' => 'ab',
    'b3' => 'bc',
    'c4' => 'de');
    foreach ($tableau as $keys => $values) {
        echo $keys."|";
        echo $values."\n";
    }

    echo '----'."\n";
