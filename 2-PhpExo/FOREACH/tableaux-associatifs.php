<?php

// 1. Affectez un tableau associatif de trois valeurs de type nombre à virgule flottante avec des clés alpanumériques à une variable

//tableau
$table = array( 'a1'=>1.1 ,'a2'=> 1.5, 'a3'=>6.5);
foreach ($table as $key => $value) {
    echo "$key: $value" . "\n" ; 
}

// 2. Affectez un tableau associatif de trois valeurs de type chaîne de caractères avec des clés alpanumériques à une variable

//tableau
$table2 = array( 'a1'=>'chaussette' ,'a2'=> "chemise", 'a3'=>'cravatte');
foreach ($table2 as $key => $value) {
    echo "$key: $value" . "\n" ; 
    //pas besoin de mettre un nom différent pour key et value car ils ne sont pas dans la même boucle for que le tableau précédent.
}

