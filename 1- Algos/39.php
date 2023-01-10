<?php
/*
Toujours et encore sur le même principe, écrivez un algorithme permettant, à l'utilisateur de saisir les notes d'une classe. 
Le programme, une fois la saisie terminée, renvoie le nombre de ces notes supérieures à la moyenne de la classe.
*/

// declaration des variables
$moy = '';
$nbNotesSup = 0 ;
$somme = 0;

// on defini la taille du tableau
$nbNotes = readline("Entrez le nombre de notes : ");
$tab = array ($nbNotes);

// on rentre les notes 
for ($i=0; $i < $nbNotes ; $i++) { 
    $tab[$i] = readline("Entrez la note : ");
}

// on va definir la moyenne de la classe
for ($i=0; $i < $nbNotes ; $i++) { 
    $somme = $somme + $tab[$i];
}
$moy = $somme / $nbNotes;

// on cherche le nombres de notes superieures
for ($i=0; $i < $nbNotes ; $i++) { 
    if ($tab[$i] > $moy) {
        $nbNotesSup++;
    }
}

// on affiche le nombre de notes sup a la moyenne
echo "le nombre de notes superieures a la moyenne ($moy) est : $nbNotesSup ." ;

?>