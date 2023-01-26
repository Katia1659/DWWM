<?php
/*
Ecrire un algorithme qui déclare un tableau de 9 notes, dont on fait ensuite saisir les valeurs par l'utilisateur.
*/
// on declare le tableau
$notes = array();

for ($i=0; $i < 9; $i++) { 
    $n= ($i + 1);
    $notes[$i] = readline("Entrez la note n° $n ");
}

?>