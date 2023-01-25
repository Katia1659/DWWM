<?php
/*Ecrire un algorithme qui permet donner le résultat d'un étudiant à
un module sachant que ce module est sanctionné par une note
d'oral de coefficient 1 et une note d'écrit de coefficient 2. La
moyenne obtenue doit être supérieure ou égale à 1O pour valider le
module.

Pour ce faire on demande les deux notes de l'étudiant, n1 et n2, puis 
on calcule la moyenne par rapport aux coefficient, donc la premier note compte
qu'une seule fois puis la deuxième compte deux fois, puis si la note dépasse
la moyenne de 10 alors on peut dire qu'il a valider le module.
*/

//Saisie de valeur et calcul de moyenne
$n1 = readline ('Quelle est la première note ? ');
$n2 = readline ('Quelle est la deuxième note ? ');
$moy = ($n1+$n2+$n2)/3;

//On détermine si l'étudiant valide le module
if ($moy>=10) {
    echo ('L étudiant à valider le module');
}else {
    echo ('L étudiant na pas valider le module');
}
?>


