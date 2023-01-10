<?php
/* 
Ecrire un algorithme qui demande l'âge d'un enfant à l'utilisateur.
Ensuite, il l'informe de sa catégorie 

Peut-on concevoir plusieurs algorithme équivalents menant à ce résultat ? 

Ecrire "quel age ?"
Lire age 
Si age = x
alors
...


*/
echo 'Début';
echo PHP_EOL;

// initialisation des variables
$age = readline("Quel est ton âge ?");

// faire le tri par age et afficher la classe 
if ($age > 5 and $age < 8) {
  echo "Tu es un poussin";
} elseif ($age > 7 and $age < 10) {
  echo "Tu es un pupille";
} elseif ($age > 9 and $age < 12) {
  echo "Tu es un Minime";
} elseif ($age > 11) {
  echo "Tu es un Cadet";
} else {
  echo "Tu es trop jeune";
}

echo PHP_EOL;
echo 'Fin';
