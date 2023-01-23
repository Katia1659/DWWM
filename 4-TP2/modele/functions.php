<?php

function getAgeFromDate(String $dateNaissance): int
{
    $ann = date ('Y', strtotime($dateNaissance));
    $age= date('Y')-$ann;
    return $age;
}



function verifImpotParis(int $age, String $sexe): bool
{

    if ($age > 20 && $sexe == 'H') {
        return true;
    } elseif ($age < 18 and $age > 36 and $sexe == 'F') {
        return true;
    } else {
        return false;
    }
    
}


