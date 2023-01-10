<?php
/*
Ecrire un algorithme qui déclare un tableau de 9 notes, dont on fait ensuite saisir les valeurs par l'utilisateur.
*/
$moy = 0;
$somme = 0;
$notes = array();
for ($i=0; $i < 9; $i++) { 
    $n= ($i + 1);
    $notes[$i] = readline("Entrez la note n° $n ");
        $somme = $somme + $notes[$i];
}
$moy = $somme / count($notes);
echo "la moyenne est : ".$moy;
?>