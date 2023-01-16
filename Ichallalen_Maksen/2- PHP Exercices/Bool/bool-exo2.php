<?php

/*

simplifier les blocs conditionnels `if` `else if` en utilisant l'opérateur booléen `||`

*/

define('ZAP_MAX', 3);
define('TICKET_AUCUN', 0);
define('TICKET_NORMAL', 1);
define('TICKET_ZAP', 2);
//On définie les variables
$billet = TICKET_ZAP;
$stations = 4;
//On renvoie les variables
echo "billet: $billet\n";
echo "stations: $stations\n";

// if ($billet == TICKET_NORMAL) {
//     echo "en règle\n";
// } else if ($billet == TICKET_ZAP && $stations <= ZAP_MAX) {
//     echo "en règle\n";
// } else {
//     echo "en fraude\n";
// }
//Simplification 
if ($billet == TICKET_NORMAL || ($billet == TICKET_ZAP && $stations <= ZAP_MAX) ) {
    echo "en règle\n";
} else {
        echo "en fraude\n";
    }

?>