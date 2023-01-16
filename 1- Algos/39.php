<?php
/*Toujours et encore sur le meme pruncipe, écrivez un algorithme permettant, a m'utilisateur de saisir les notes d'une classe? Le programme, une fois la saisie terminée, renvoie le nombre de ces notes supérieures à la moyenne de la classe

*/

$tableau = array();

$somme=0;
$moyenne=0;
$nsup=0;
$nombre= readline('Veuillez entrer le nombre de note a saisir  :');

//boucle pour que l'utilisateur insert des notes dans le tableau
for ($i=1; $i <=$nombre ; $i++) { 
    $valeur= readline ('Veuillez entrer vos notes  :'); 
    $somme += $valeur;
    $tab[$i]=$valeur;
    $moyenne= $somme / $nombre;
    
}

//boucle pour parcourir le tableau et trouver les notes qui sont supérieurs a la moyenne de la classe
for ($i=1; $i <= count($tab) ; $i++) { 
    if ($tab[$i] > $moyenne) {
        $nsup= $nsup + 1;
    }
}

echo $nsup;
echo PHP_EOL;
echo $moyenne;




