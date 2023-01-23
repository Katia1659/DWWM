<?php
/* 
Ecrire un algorithme qui permet de donner le résultat d'un étudiant à un module sachant que ce module est composé d'une note d'oral de coefficient 1 et d'une note d'écrit de coefficient 2. La moyenne obtenue doit etre supérieur à 10 pour valider le module. 

lire note oral 
lire note écrite 

moyenne = (oral + (ecrit * 2))/3

si moyenne > 10 
ecrire bravo 

sinon raté 
*/



echo 'Début';
echo PHP_EOL;

// initialisation des variables 
$noteOral = readline("Note de l'oral ");
$noteEcrit = readline("Note de l'écrit ");
echo PHP_EOL;

// calcul de la moyenne 
$moyenne = ($noteOral + ($noteEcrit * 2)) / 3;

// conditionnement du rendu 
if ($moyenne >= 10) {
    echo 'Votre moyenne est de ' . $moyenne . PHP_EOL . ' vous etes reçu';
} else {
    echo 'Votre moyenne est de ' . $moyenne . PHP_EOL . 'vous n"etes pas reçu';
}

echo PHP_EOL;
echo 'Fin';
