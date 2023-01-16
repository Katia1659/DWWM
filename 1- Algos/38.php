<?php
/* Ecrivez un algorithme permettant, toujours sur le meme principe, a l'utilisateur de saisir un nombre déterminé de valeurs. Le programme, une fois la saisie terminée, renvoiela plus grande valeur en précisant quelle position elle occupe dans le tableau. On prendra soin d'effectuer la saisie dans un premier temps, et la recherche de la plus grande valeur du tableau dans un second temps

*/

//initialisation du tableau
$tab = array();

//la plus grande valeur est a 0
$pg=0;


$n= readline('Veuillez entrer un nombre de valeur a saisir  :');


for ($i=1; $i <=$n ; $i++) { 
$valeur= readline ('Veuillez entrer vos valeurs  :'); 
$tab[$i]=$valeur;
if ($valeur > $pg)
  $pg=$valeur;


}

echo "le plus grand nombre est : " . $pg;
echo PHP_EOL;
echo "la position de la valeur est " . $ipg;
