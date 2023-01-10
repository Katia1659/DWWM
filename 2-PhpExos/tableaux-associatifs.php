<?php

// 1. Affectez un tableau associatif de trois valeurs de type nombre à virgule flottante avec des clés alphanumériques à une variable
$tab = array('a0' => 1.53, 'b1' => 6.51, 'c2' => 4.35);
// 2. Affectez un tableau associatif de trois valeurs de type chaîne de caractères avec des clés alphanumériques à une variable
$tab2 = array('d0' =>'kljgle', 'd1' => 'fdken', 'd2' => 'fd,nszfds');

//affichage premier tableau
foreach ($tab as $key => $value) {
    echo $key.'=>'.$value."\n";
}

//affichage second tableau
foreach ($tab2 as $key => $value) {
    echo $key.'=>'.$value."\n";
}