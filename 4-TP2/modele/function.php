<?php 

function getAgeFromDate ($dateNaiss ) {
    $now= date('y-m-d');
    $diff = date_diff(date_create($dateNaiss), date_create($now));
    return $diff->format('%y');
}


function verifImpotParis (int $age, string $sexe) : bool {
    if ( (($age>=35 and $age<=18) and $sexe == 'femme') or ($sexe = 'homme' and $age > 20 )  ) {
        return true;
    } else {
        return false;
    }

}




?>