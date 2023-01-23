<?php

/*
Ecrire un algoritme qui demande successivement 20 nombre à l'utilisateur, et qui lui dit ensuite quel etait le plus grand parmis ces nombres.
*/
// initialisation de la variable x
$x = 0;

//demande 20 nombres a l'utilisateur et recherche le plus grand
for ($i=1; $i <= 5 ; $i++) { 
    $demande = readline("donnez 20 nombres : ");

    if ( $demande > $x ) {
        $x = $demande;
    }
}

//affiche le plus grand des 20 nombres
echo "\n";
echo "le plus grand est des 20 nombres est : ";
echo $x;
echo "\n";
echo "Fin";

?>