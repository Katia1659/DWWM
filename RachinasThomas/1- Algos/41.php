<?php

/*
Ecrire un algorithme effectuant le decalage des elements d'un tableau
- tableau initial   D | E | C | A | L | A| G | E
- tableau modifiée decalage a gauche E | C | A | L | A | G | E | D

*/


// initialisation des variables 
$tableau = array('D', 'E', 'C', 'A', 'L', 'A', 'G', 'E');
$temp = $tableau[0];

// parcours et affiche le tableau
for ($i=0; $i <= count($tableau) - 1  ; $i++) {
    echo $tableau[$i]; 
}

echo "\n";

//la boucle permet de deplacer les lettres dans le tableau
for ($i=0; $i <= count($tableau) - 2; $i++) {
    $tableau[$i] = $tableau[$i + 1];
}

//decalage des lettres 
$tableau[count($tableau) - 1] = $temp;

//afficher le tableau
for ($i=0; $i <= count($tableau) - 1 ; $i++) {
    echo $tableau[$i];
}

?>