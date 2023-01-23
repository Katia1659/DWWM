<?php

function verifImpotParis ( string $gender, int $age): bool {
    
    if ($gender == "H" && $age >  20) {
        return true;
    }elseif ($gender == "F" && $age >= 18 && $age <= 35) {
        return true;
    }else {
        return false;
    }
}

function getAgeFromDate (string $date): int{

    $age = date('Y') - date('Y', strtotime($date)); 
    if ($age<0 ) { 
        return $age - 1; 
    } 
    return $age; 
} 
?>

