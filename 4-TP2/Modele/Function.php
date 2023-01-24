<?php
function getAgeFromDate($dateNaiss):int
{
    $dateJour = date_create(date("d-m-Y"));
    $date = date_create($dateNaiss);
    // $d2 = date_create("26-09-2002");
    $age = $date->diff($dateJour)->format('%y');
    return $age;
}

function verifImpotParis(int $age, $sexe): bool
{
    if (($sexe == 'Femme') and ($age > 17 and $age < 36)) {
        $reponse = True;
    } elseif ($sexe == 'Homme' and $age > 19) {
        $reponse = True;        
    } else {
        $reponse = False;        
    }
    return $reponse;
}


