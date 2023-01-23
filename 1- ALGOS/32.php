<?php
/*Ecrire un algorithme qui déclare un tableau de 9 notes, dont on fait
ensuite saisir les valeurs ar l'utilisateur.

*/
//On déclare le tableau
$notes = array( );
//On le remplie avec une boucle for qui demande à l'utilisateur des valeurs
for ($i=1; $i <10 ; $i++) { 
    $notes[$i] = readline ('Donnez une note : ');
}
//on affiche le tableau
for ($i=1; $i <10 ; $i++) { 
    echo $notes[$i]."\n";
}
?>