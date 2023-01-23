<?php
/* Ecrire un algorithme qui permet de donner le résultat d'un étudiant à module sachant que ce module est sanctionné par une note d'oral de coefficient 1 et une note d'écrit de coefficient 2. La moyenne obtenue doit être supérieure ou égale à 10 pour valider le module.
Var
*/
// Variable no correspond à note orale, et la variable ne à la note écrite
$no=readline('Quelle est la note orale :');
$ne=readline('Quelle est la note écrite :');

// On procède a un calcul de la moyenne entre les variables no et ne pour voir s'il 
if (($no*1 + $ne*2)/3>=10) {
    echo "Validé";
} else {
    echo "Défaillant ";
}
?>