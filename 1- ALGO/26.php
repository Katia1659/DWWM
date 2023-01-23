<?php
/*Saisir 3 entiers a, b, c et déterminer dans R les racines de
l'équation ax2 + bx + c = 0.

Pour ce faire on demande trois valeurs à l'utilisateur, puis on on la met
sous la forme ax²+bx+c. On calcul Delta qui vaut b²-4ac. Puis on trouve les solutions 
par rapport à Delta s'il est positifl'équation admet deux solutions, si Delta vaut 0
elle admet une solution, si Delta est négatif elle n'admet pas de solution dans R.
On utilise donc des IF.
*/

//Saisie des valeurs et calcul de delta.
$a = readline ('Donnez la valeur de a : ');
$b = readline ('Donnez la valeur de b : ');
$c = readline ('Donnez la valeur de c : ');
$delta = $b**2-4*$a*$c;
//Trouver les solutions selon la valeur de delta.
if ($delta>0) {
    echo ('1er Solution : ');
    echo (-$b-sqrt($delta))/(2*$a);
    echo "\n";
    echo ('2ème Solution : ');
    echo (-$b+sqrt($delta))/(2*$a);
}elseif ($delta==0) {
    echo ('Il y a donc qu une seule solution : ');
    echo -$b/(2*$a);
}else {
    echo ('Il n y a donc pas de solutions');
}

?>