<?php
/* 
Ecrire un algorithme qui déclare un tableau de 9 notes, dont on fait ensuite saisir les valeurs par l'utilisateur

création d'un tableau de 9 cases
 faire une boucle dans laquelle on demande les notes 

 */

echo 'Début';
echo PHP_EOL;
// initialisation des variables manuelle
$tab = array();
for ($i = 1; $i <= 9; $i++) {
    $tab[$i] = readline("Quelle est la note ? ");
    echo PHP_EOL;
}


// affichage des résultats
for ($i=1; $i < sizeof($tab) ; $i++) { 
    echo $tab[$i]. " ";
}


echo PHP_EOL;
echo 'Fin';
