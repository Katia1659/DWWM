<?php

/*

simplifier les blocs conditionnels `if` imbriqués en utilisant l'opérateur booléen `&&`
*/

// Tableau
define('ZAP_MAX', 3);
define('TICKET_AUCUN', 0);
define('TICKET_NORMAL', 1);
define('TICKET_ZAP', 2);

$billet = TICKET_ZAP;
$stations = 3;

echo "billet: $billet\n";
echo "stations: $stations\n";

// On enleve un if et on la rajoute dans la condtion du elseif.

if ($billet == TICKET_NORMAL) {
    echo "en règle\n";
} else if ($billet == TICKET_ZAP && $stations <= ZAP_MAX) {
        echo "en règle\n";
    } else {
        echo "en fraude\n";
}

