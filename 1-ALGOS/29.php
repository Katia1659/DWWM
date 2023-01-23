<?php

/* Exercice 29

Ecrire un algorithme qui demande un nombre, calcule et affiche la somme Sigma

*/
// Demande de saisie d'un nombre par l'utilisateur, initialisation de la variable somme à 1.

$som = 1;

$nb = readline('Saisissez un nombre : ');

// On initialise une boucle i, allant de 0 à la valeur du nombre saisi, qui va calculer la somme cubique du nombre saisi. Enfin on affiche la somme cubique du nombre saisi.  
for ($i=0; $i <= $nb ; $i++) { 
    $som = $som + ($i * $i * $i);
}
echo $som; 

