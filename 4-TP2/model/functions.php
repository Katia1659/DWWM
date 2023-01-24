<?php
session_start();


function getAgeFromDate ($dateNaissance) : int {
    $today = date("Y/m/d");
    $diff = date_diff(date_create($dateNaissance),date_create($today));
        return $diff->format('%y');
};

function verifImpotsParis (int $age, string $sexe): bool {

    if ($sexe == 'Homme' ){
        if ($age >= 20 ){
            return true;
        }
    } else;
        if($sexe == 'Femme'){
            if($age >= 18 and $age <= 35){
                return true;
            } else 
                return false;
        }
            
} ;


?>