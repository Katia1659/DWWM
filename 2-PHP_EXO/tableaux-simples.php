<?php

// 1. Créez une variable avec le nom de votre choix, en respectant la syntaxe "camel case"
// et affectez-lui un tableau contenant trois nombres entiers

// 2. Même exercice avec des nombres à virgule flottante

// 3. Même exercice avec des chaînes de caractères

// 4. Même exercice avec un tableau contenant un nombre entier, un nombre à virgule flottante et une chaîne de caractères

$nombreEntier = array (
    1,
    2,
    3
);

print_r($nombreEntier);

$nombreVirgule = array (
    2.3,
    2.4,
    2.5
);

print_r($nombreVirgule);

$chaineCaractere = array(
    'Un',
    'Deux',
    'Trois'
);

print_r($chaineCaractere);

$differentsTypes = array (
    1,
    2.7,
    'Trois'
);

print_r($differentsTypes);