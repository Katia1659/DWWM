<?php

// Écrivez un bloc `if` qui affiche si la variable suivante est :
//     - plus grande que 10
//     - plus petite que 10
//     - égale à 10

$nombre = 11;

if ( $nombre > 10 ) {
    echo 'supérieur à 10';
} elseif ( $nombre < 10 ) {
    echo 'inférieur à 10';
} else {
    echo 'égal à 10';
}

?>