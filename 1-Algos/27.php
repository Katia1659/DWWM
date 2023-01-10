<?php

/*Ecrire un algorithme qui permet de donner le résultat d'un étudiant à un module sachant que ce module est sanctionné par une note d'oral de coefficient 1 
et une note d'écrit de coefficient 2. La moyenne obtenue doit être supérieur ou égale à 10 pour valider le module.
*/

$oral = readline('entrer la note oral: ');
$ecrit = readline('entrer la note écrite: ');
//l'utilisateur déclare les notes

$moyenne = ($oral + ($ecrit * 2)) / 3;
// on calcule la moyenne sachant que la note écrite est coeff 2

if ($moyenne >= 10) {
    echo "Le module est validé" ;
} else {
    echo "Le module n'est pas validé" ;
}

?>