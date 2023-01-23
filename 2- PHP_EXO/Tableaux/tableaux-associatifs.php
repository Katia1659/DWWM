<?php

// 1. Affectez un tableau associatif de trois valeurs de type nombre à virgule flottante avec des clés alphanumériques à une variable

// 2. Affectez un tableau associatif de trois valeurs de type chaîne de caractères avec des clés alphanumériques à une variable

//Création des tableaux
$tab1 = array('Pi'=> 3.14,'Avogadro' => 6.02,'mProton'=>4.67 );

$tab2 = array(1 => 'Un', 4 => 'Quatre', 9 => 'Neuf');


//On affiche par la suite les tableaux
foreach ($tab1 as $key => $value) {
    echo "\n".$key.' = '.$value;
}

echo "\n";

foreach ($tab2 as $key => $value) {
    echo "\n".$key.' = '.$value;
}
?>