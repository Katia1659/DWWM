<?php
/* Réecrire l'algorithme précédent, mais cette fois-ci on ne connaait pas d'avance combien l'utilisateur souhaite saisir de nombres. La saisie des nombres s'arrete lorsqye l'utilisateur entre zéro"
ecrire "veuillez entrer une valeur"

tant que n!=0 alors
la boucle continue
on incrémente le n 
*/

$n = readline ('Entrez un nombre :'); 

while( $n != 0 )
{
    
    $n = readline ('Entrez un nombre :');
    echo $n;
}


