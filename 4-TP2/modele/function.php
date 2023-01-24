<?php
function getAgeFromDate(string $date): int{
    //function qui calcul l'age a partir d'une date
    $date = date_create($date);
    $age = $date->diff(new \DateTime())->format('%y');
    return $age;
}

//function qui verifie si vous etes imposable ou non par raport a votre age et genre.
function verifImposParis(int $age, string $gender): bool{
    if(($age >= 20 && $gender === 'male') || ($age >= 18 && $age <= 35 && $gender === 'female')) {
        $val = true;
    }else{
        $val = false;
    }

    return $val;
}
