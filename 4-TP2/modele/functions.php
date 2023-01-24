<?php



function convertAge(string $dateNaissance, string $aujourdhui) : string { 

    $aujourdhui = date('Y-m-d');
    $dateNaissance = new DateTimeImmutable($dateNaissance);
    $aujourdhui = new DateTimeImmutable($aujourdhui);
    $age = date_diff($dateNaissance, $aujourdhui); 
    return $age->format('%y');
} 



function verifAgeImpot(int $age, string $sexe) : bool 
{

     if ($age > 20 &&  $sexe == 'Homme' || $age >= 18 && $age <= 35 && $sexe == 'Femme'){

 	return true; 

    } else 
    return false;
}

?>