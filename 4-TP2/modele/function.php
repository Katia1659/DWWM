<?php

//================================================================== FONCTION 1 ==================================================================

//Fonction pour convertir la date de naissance en âge

function getAgeFromDate($dateNaiss): int { 
    $dateAjd = date("d-m-y");
    $age = date_diff(date_create($dateNaiss), date_create($dateAjd));    
    return $age->format('%y');
    // format('%y') pour avoir le résultat en années
}

//================================================================== FONCTION 2 ==================================================================

//Fonction pour savoir si l'individu est imposable

function verifImpotParis(int $age, string $sexe): bool{
    if (($age >= 20 and ($sexe == 'homme')) || ($age >= 18 and $age <= 35 and ($sexe == 'femme')) ) {
        $resultat = true ;
    } else {
        $resultat = false ;
    }
    return $resultat;
}
?>