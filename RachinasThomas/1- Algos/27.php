<?php 

/* 
ecrire un algorithme qui permet de donner le resultat d'un etudiant à un module,
sachant que ce module est sanctionner par une note d'oral de coefficient 1 et une note d'ecrit de coefficient 2.
La moyenne obtenue doit etre supperieure ou egale a 10 pour valider le module.




*/

//saisi des notes

$noteOral = readline("rentrez note oral : ");
$noteEcrit = readline("renrez note ecrit : ");

// calcul moyenne

$moyenne = $noteOral + ($noteEcrit * 2) / 3;

if ( $moyenne >= 10 ) {
    echo "la moyenne est : ".$moyenne."\n";
    echo "le module est validé ! \n";

}else {
    echo "la moyenne est : ".$moyenne."\n"; 
    echo "le module n'est pas validé ! \n";
}

echo "fin";


?>