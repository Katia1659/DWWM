<?php
/* 
Ecrire un algorithme qui demande un nombre à l'utilisateur et l'informe ensuite si ce nombre est positif ou négatif ( on laisse de côté le cas ou le nombre vaut zéro).


Ecrire nombre
Lire nbr 
  Si nbr > 0
  ecrire "ce nombre est positif
    Sinon 
    ecrire "ce nombre est négatif

*/
// initialisation des variables
echo 'Début';
echo PHP_EOL;
$nbr = readline("Choisir un nombre : ");

// Le "SI" pour faire le tri entre les positifs et les négatifs avec affichage 
if ($nbr > 0) {
  echo "Le nombre est positif";
} else {
  echo "Le nombre est négatif";
}

echo PHP_EOL;
echo 'Fin';
