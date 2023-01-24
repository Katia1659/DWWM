<?php

function calculAge (string $date) : string {
    $dateA = date('y-m-d') ;
    $date = new DateTimeImmutable($date);
    $dateA = new DateTimeImmutable($dateA);
    $age = date_diff($dateA, $date);
    $diff = $age->format ('%y');
    return $diff;   
}

function verifImpot ( $age,  $gender) : bool  {
if ($age <= 20 and $gender == "homme" || $age < 18 or $age > 30 and $gender == "femme" ) {
    return false;
}else {
    return true;
}
}

?>