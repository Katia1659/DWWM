<?php
/* Ecrire un algorithme qui demande un nombre de départ, et qui calcule sa factorielle.
Var nb, factorielle, i ;
    début
        Ecrire "Veuillez écrire un nombre:";
        Lire nb;
        Pour i allant de 1 à n
            factorielle = factoriele * i;
        FinPour 
        Ecrire factorielle;
    fin


*/

$nb = readline('Veuillez écrire un nombre: ');
$factorielle = 1;
for ($i = 1; $i <= $nb; $i++) {
    $factorielle = $factorielle * $i;
}
echo $factorielle; 

?>