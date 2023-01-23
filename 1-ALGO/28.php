<?php
// Ecrire l'agorithme permettant d'imprimer triangle suivant :
// 1
// 12
// 123
// 1234
// 12345
// 123456

$nbLign = readline ('Nombres de lignes ? ');

// Creation du triangle
for ($i = 1; $i <= $nbLign; $i++) {

    for ($j = 1; $j <= $i; $j++) {
        echo $j . "";
        if ($j == $i) {
            echo "";
            echo "\n";
        }
    }
}
?>