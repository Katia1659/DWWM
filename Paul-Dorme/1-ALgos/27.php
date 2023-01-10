<?php 
/* Ecrire un algo qui permet de donner le resultat dun etudiant à un module sachant quye ce module est sanctionné par une note oral de coeff 1 et une note ecrit de coeff 2 
La moy obtenue doit etre supérieure ou égale à 10 pour valider le module*/

// Variables
$noteOral = readline('Note oral ? ');
$noteEcrit = readline ('Note ecrit ?');

//Calcul de moyenne
$moy = ($noteOral*1 + $noteEcrit*2)/3;

// Validation du module
if ($moy >= 10) {
    echo 'Module valider';
} else {
    echo 'Module non valider';
}




?>