<?php
/* Réécrire l'algorithme précédent, mais cette fois-ci on ne connait pas d'avance combien l'utilisateur souhaite saisir de nombres. La saisie des nombres s'arrête lorsque l'utilisateur entre un zéro.
Var nb, pg, i, place;
    début 
        i=1
        Ecrire "Veuillez entrez un nombre: ";
        Lire nb;
        pg = nb ;
        Tant que (nb != 0)
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
$i=1;
$nb = readline('Veuillez écrire un nombre: ');
$pg=$nb;
while ($nb != 0) {
    $nb = readline('Veuillez écrire un nombre: ');
    
    $i++;
        $nb = readline('Veuillez écrire un nombre: ');
        if ($nb>$pg) {
            $pg=$nb;
            $place=$i;
        }
      
}

echo PHP_EOL;
echo "le nombre le plus grand est " . $pg;
echo PHP_EOL;
echo "ce nombre se trouve en position : " . $place ;

?>