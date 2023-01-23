<?php
/* Ecrire un algorithme qui demande si le nombre est pos ou neg ca null inclue 

Variable nbr en entier
Début 
ecrire "Donner un nombre "
lire nbr 
tanque (nbr != 0) {
    si (nbr>o) alors
    ecrire "nombre Positif

    sinon 
    ecrire "nombre Négative"

    finsi
}

ecrire "Le nombre est nulle" 
*/

// Déclaration de variable
$a = readline ('saisie un nombe : ');


// boucle WHILE 
while ($a != 0) {
   
    if ($a >0)  print 'Nombre positif';    
    else print 'Nombre Négatif';
    echo PHP_EOL;
    $a = readline ('saisie un nombe : ');
}

// Affichage :
print 'Nombre Nulle';
?>