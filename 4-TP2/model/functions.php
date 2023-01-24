<?php



//calcul de l'age 
function getAgeFromDate ($date_naiss) {
    $aujd= date('y-m-d');
    $date = date_diff(date_create($date_naiss), date_create($aujd));
    return $date->format('%y');
}

//--------------------------------------------------------------------------------------------


//fonction verif impot paris 
function verifImpotParis(int $age, string $sexe) : bool {
    //pour les femmes
    if (($sexe == 'femme' ) && ($age > 17 && $age < 36)) {
        $val = true;
    }elseif (($sexe == 'homme') && ($age >= 20) ) { 
        $val = true;            
    } else {
        $val = false; 
    }
    return $val;
}







?>