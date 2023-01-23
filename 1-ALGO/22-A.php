<?php
/* Ecrire un algorithme qui demande successivement 20 nombres à l'utilisateur, et qui lui dit ensuite quel était le plus grand parmi ces 20 nombres.
Var nb, pg, i;
    début 
        pg=0
        Pour i allant de 1 à 20; 
        Ecrire "Veuillez entrez un nombre: ";
        Lire nb
        FinPour
        Si nb>pg Alors
            pg=nb
        FinSi
        Ecrire "le nombre le plus grand est " .pg;
    fin

$pg=0;
for ($i=0; $i < 20; $i++) { 
    $nb = readline('Veuillez écrire un nombre: ');
    

}
if ($i=0 or $nb>$pg) {
        $pg=$nb;
    }
echo "le nombre le plus grand est " .$pg;

*/

$pg=0;
for ($i=0; $i < 20; $i++) { 
    $nb = readline('Veuillez écrire un nombre: ');
    if ($nb>$pg) {
        $pg=$nb;
    }
}

echo "le nombre le plus grand est " .$pg;
?>