<?php
/* Modifiez ensuite l'algorithme pour que le programme affiche de surcroit en quelle position avait été saisie ce nombre.
Var nb, pg, i, place;
    début 
        pg=0
        Pour i allant de 1 à 20; 
        Ecrire "Veuillez entrez un nombre: ";
        Lire nb
        FinPour
        Si nb>pg Alors
            pg=nb
            place=i
        FinSi
        Ecrire "le nombre le plus grand est " .pg;
        Ecrire "le nombre se trouve en" .place "position";
    fin

*/

$pg=0;
for ($i=0; $i < 20; $i++) { 
    $nb = readline('Veuillez écrire un nombre: ');
    if ($nb>$pg) {
        $pg=$nb;
        $place=$i;
    }

}

echo "le nombre le plus grand est " .$pg;
echo PHP_EOL;
echo "ce nombre se trouve en " .$place ." position";

?>