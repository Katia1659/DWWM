<?php
/* 
Ecrire un algorithme qui demande deux nombres à l'utilisateur et l'informe ensuite si leur produit est négatif ou positif (On  inclut cette fois le traitement du cas ou le produit peut être nul )


Ecrire nombre
Lire nbr 
Ecrire nombre
Lire nbr1
Ecrire un nombre 
Livre nbr2 
nbr1 = nbr1 * nbr2
  Si nbr1 <= -1  
  ecrire "le produit est négatif"
    Sinon 
    ecrire "le produit est positif"

*/
echo 'Début';
echo PHP_EOL;

// initialisation des variables
$nbr1 = readline("Choisir un nombre : ");
$nbr2 = readline("Choisir un second nombre : ");

// Le "SI" pour faire le tri entre les positifs et les négatifs apres la mutiplication avec affichage
if ($nbr1 == 0 or $nbr2 == 0) {
  echo "le produit est nul";
} else {
  if (($nbr1 > 0 and $nbr2 > 0) or ($nbr1 < 0 and $nbr2 < 0)) {
    echo "le produit est positif";
  } else {
    echo "le produit est négatif";
  }
}

echo PHP_EOL;
echo 'Fin';
