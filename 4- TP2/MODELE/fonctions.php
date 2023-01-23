<?php

// Fonction getAgeFromDate => pour récupérer l'age depuis la date de naissance:
function getAgeFromDate(string $dateNaissance): int
{
  $anne = date('Y', strtotime($dateNaissance));
  $age = date('Y') - $anne;
  if ($age < 0) {
    return -1;
  } else {
    return $age;
  }
}


// Fonction verifImpotParis => pour vérifier selon l'age et le genre  si l'individu est imposable ou pas 
function verifImpotParis(int $age, string $sex): bool
{
  if ($sex == 'M' and $age >= 20) {
    return true;
  } elseif ($sex == 'F' and $age >= 18 and $age <= 35) {
    return true;
  } else {
    return false;
  }
}
