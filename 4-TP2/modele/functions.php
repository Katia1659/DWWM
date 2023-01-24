<?php

function getAgeFromDate(string $dateDeNaiss):int {

    $dateDeNaiss = new DateTime($dateDeNaiss);
    $dateTime= date('Y-m-d');//retourne date sous forme string
    $dateTime = new DateTime($dateTime);
    $age = date_diff($dateDeNaiss, $dateTime);
    return $age->format('%y');

}


function verifImpotParis(int $age, string $sexe): bool{
    if ($sexe=='Homme' and $age > 21) {
        return true;
     }elseif ($sexe='Femme' and $age > 19 and $age < 36 ) {
        return true;
     } else {
        return false;
     }
        
    }
    

?>