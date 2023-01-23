<?php

// Écrivez une fonction qui affiche la date du jour
// NOTE : la date du jour peut être récupérée en faisant l'appel de fonction suivant :

date('d/m/Y');

//creation de la fonctions date 
function dateJourAnnée(): void{
    $date =date('d/m/Y');
    echo $date ; 
};


dateJourAnnée();
