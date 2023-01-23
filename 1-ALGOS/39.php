<?php

/* Exercice 39 

Toujours et encore sur le même principe, écrivez un algorithme permettant, à l'utilisateur de saisir les notes d'une classe. Le programme, une fois la saisie terminée, renvoi le nombre de ces notes supérieures à la moyenne de la classe.

*/

// On demande à l'utilisateur le nombre de valeurs à saisir.
// On déclare deux tableaux, un premier tableau contenant les notes, ainsi qu'un second contenant les notes supérieures à la moyenne de la classe
// On déclare la variable som, contenant la somme des notes saisies dans le premier tableau
// On déclare la variable moy, qui contient la moyenne des notes saisies dans le tableau
// cptSup correspond à l'indice des notes du second tableau, qui contient les notes supérieures à la moyenne

$nbValeurs = readline('Entrez le nombre de notes à saisir : ');
$notes = array();
$noteSup = array();
$som = 0;
$moy = 0;
$cptNoteSup = 0;

// On demande à l'utilisateur de saisir les différentes notes. 

for ( $i = 0 ; $i < $nbValeurs ; $i++) {
    $notes[$i] = readline('Saisissez les différentes notes : ');
    $som += $notes[$i];
    $moy = $som / $nbValeurs;
    
}

// On fait une deuxième boucle, dans laquelle le compteur du second tableau prend 1 lorsqu'une note est supérieure à la moyenne. 

for ($i = 0; $i < $nbValeurs ; $i++ ) {

    if ($notes[$i] > $moy) {
        $cptNoteSup += 1;
    }
}

// On affiche la moyenne de la classe. Ensuite on affiche le nombre de notes supérieures à la moyenne. 

echo 'La moyenne de la classe est de ' .$moy. '.';
echo "\n";
echo 'Il y a ' . $cptNoteSup . ' '. 'notes supérieures à la moyenne';