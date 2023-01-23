<?php

// 1. Affectez un tableau associatif de trois valeurs de type nombre à virgule flottante avec des clés alpanumériques à une variable.

// 2. Affectez un tableau associatif de trois valeurs de type chaîne de caractères avec des clés alphanumériques à une variable.

$tab = array(
    'c1' => '1.3',
    'c2' => '1.10',
    'c3' => '1.5'
);

$tab2 = array(
    'a1' => 'abc',
    'b1' => 'abc',
    'c1' => 'abc'
);

foreach ($tab as $key => $value) {
    echo $key." | ";
    echo $value."\n";
}

echo "\n";

foreach ($tab2 as $key => $value) {
    echo $key." | ";
    echo $value."\n";
}
?>
