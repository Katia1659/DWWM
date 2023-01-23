<?php
/*Ecrire un algorithme qui demande l’âge d’un enfant à l’utilisateur. Ensuite, il l’informe de sa catégorie :
"Poussin" de 6 à 7 ans
"Pupille" de 8 à 9 ans
"Minime" de 10 à 11 ans
"Cadet" après 12 ans
Peut-on concevoir plusieurs algorithmes équivalents menant à ce résultat ?

Variable age en Entier
Début
Ecrire "Entrez l’âge de l’individus : "
Lire age
Si age >= 12 Alors
  Ecrire "Catégorie Cadet"
SinonSi age >= 10 Alors
  Ecrire "Catégorie Minime"
SinonSi age >= 8 Alors
  Ecrire "Catégorie Pupille"
SinonSi age >= 6 Alors
  Ecrire "Catégorie Poussin"
Finsi
Fin

*/



echo  'Début';
echo PHP_EOL;
// Déclaration de variable
$age =readline ('Entrez l’âge de l’individus : ');

// Affichage :

if ($age >=12){
    Echo 'Catégorie Cadet';
}
elseif ($age >=10){
    Echo "Catégorie Minime";
}
elseif ($age >=8) {
    echo 'Catégorie Pupille';
}
elseif ($age >=6) {
   echo 'Catégorie Poussin';
}

echo PHP_EOL;
echo 'fin';
?>