<?php

/* Exercice 27 

Ecrire un algorithme qui permet de donner le résultat d'un étudiant à un module sachant que ce module est sanctionné par une note d'oral de coefficient 1 et une note d'écrit de coefficient 2. La moyenne obtenue doit être supérieure ou égale à 10 pour valider le module.

*/

//Demande des saisies de chaque note, à l'oral et à l'écrit
$note1 = readline("Quelle note avez vous eu à l'oral ? ");
$note2 = readline("Quelle note avez vous eu à l'écrit ? ");

//La note numéro 2 est de coefficient 2 donc elle compte double
$note2 = $note2 * 2;
// On divise par 3, la première note est coeff 1 et la note 2 est coeff 2 
$moyenne = $note1 + $note2 / 3;

// Si la moyenne est supérieur à 10 le module est validé, si la moyenne est inférieure à 10 le module n'est pas validé
if ($moyenne > 10) {
echo 'Vous avez validé le module';

} else {
    echo "Vous n'avez pas validé le module";
}

    

