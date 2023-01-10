<?php
/* Ecrire un algorithme qui permet de donner le résultat d'un etudient à un module sachant que ce module est sanctionné par une note d'oral de coefficient 1 et une note d'écrit de coefficient 2.
La moyenne obtenue doit être supérieure ou égale à 10 pour valider le module. */
// on demande d'entrer les notes des élève en affectant les coef

$nOral = readline ("Entrez la note d'oral : ") * 1;
$nEcrit = readline ("Entrez la note d'écrit ") * 2;

// Atribut à $moy le calcul de la moyenne de l'elève
$moy = ($nOral + $nEcrit)/3;

//algo pour savoir et dire si le module est validé
if ($moy >= 10) {
    echo "Module validé avec une moyenne de $moy";
}
else {
    echo "Module non validé avec une moyenne de $moy";
}
?>