<?php 
function getAgeFromDate($dateNaiss):int {
    $aujourdhui = date("Y-m-d");
    $diff = date_diff(date_create($dateNaiss), date_create($aujourdhui));
    $age = $diff->format('%y');
  return (int) $age;
}

function verifImpotParis (int $age, string $sexe) : bool {
if (($sexe == 'femme' and $age >=18 and $age <=35) or ($sexe == 'homme' and $age >= 18)) {
        return true;
}else {
        return false;
}
    
}