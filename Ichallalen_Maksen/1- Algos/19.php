<?php
/*• Ecrire un algorithme qui demande un nombre de départ, et qui
ensuite affiche les dix nombres suivants. Par exemple, si
l'utilisateur entre le nombre 17, le programme affichera les
nombres de 18 à 27.

Pour ce faire on utilise on boucle for ajoutant et affichant le nombre
n + 1 à chaque tour de boucle.


*/
$n = readline('Donnez un nombre : ');
for ($i = 0; $i < 10; $i++) {
    $n = $n+1;
    echo "\n";
    echo $n;
}



?>