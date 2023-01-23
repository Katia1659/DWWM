<?php

// 1. Créez une variable avec le nom de votre choix, en respectant la syntaxe "camel case"
// et affectez-lui un tableau associatif contenant les éléments suivant :
//
//     - id => 1
//     - prenom => Foo
//     - nom => Bar
//     - email => foo.bar@baz.com

$tab= array ('id' => '1' ,
'prenom' => 'Foo', 
'nom' => 'Bar',
'email' => 'foo.bar@baz.com'
);

foreach ($tab as $key => $value) {
    echo $key.'->'.$value."\n";
}
?>