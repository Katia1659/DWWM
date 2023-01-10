<?php
/* Ecrire un algo l'user de rentrer un nb determiner de valeurs. Le programme renvoie la + grande valeur en donnant sa position*/


// Initialisation variables
$max = 0;
$posi = 0;

$nbV = readline ('Nombre de valeurs ? -> ');

//Recherche du max et de sa position
for ($i=1; $i <= $nbV; $i++) { 
    $nb = readline ("Entrez un nombre ->");
    $tab[$i] = $nb;
    
    if ($nb >  $max) {
        $max = $nb;
        $posi = $i;
    }
}

//Affichage
echo 'Position de max : '.$posi."\n";
echo 'Max : '.$max;
?>