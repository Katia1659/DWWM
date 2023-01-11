<?php
/*Ecrire un algorithme qui déclare et remplisse un tableau contenant
les six voyelles de l'alphabet latin.

On crée un tableau avec array puis le remplie avec les voyelles.
*/

//On déclare et remplie le tableau
$voyelles = array( );
$voyelles[0]='A';
$voyelles[1]='E';
$voyelles[2]='I';
$voyelles[3]='O';
$voyelles[4]='U';
$voyelles[5]='Y';


//On affiche le tableau
for ($i=0; $i < 6; $i++) { 
    echo $voyelles[$i]."\n";
}


?>