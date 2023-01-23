<?php

/* Exercice 30 

Donnez le résultat de la multiplication de deux nombres en ne faisant que des additions. 

*/

// On demande deux valeurs à l'utilisateur

$nb = readline('Saisissez un premier nombre : ');
$nb2 = readline('Saisissez un second nombre : ');
$produit = 0;

// On initialise produit à 0, à chaque tour de boucle on lui ajoute $nb2 jusqu'à i égal à la valeur de $nb



    for ($i = 1; $i <= $nb; $i++ ) {
        $produit = $produit + $nb2;
        
    } 
    echo "Le produit des deux nombres est de ";
    echo $produit;



/*
else    
    if ($nb2 > $nb) {
        for ($i = 1; $i <= $nb2; $i++) {
            $produit = $produit + $nb;
            
        }   
        echo $produit;
    }
    */