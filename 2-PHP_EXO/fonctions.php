<?php

// Écrivez une fonction qui affiche la date du jour
// NOTE : la date du jour peut être récupérée en faisant l'appel de fonction suivant :
function dateAujourdhui(): void {
    
    $date = date('d/m/Y');
    echo "Aujourd'hui nous sommes le $date \n";
}
dateAujourdhui ();


