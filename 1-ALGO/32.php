<?php
/* Ecrire un algorithme qui déclare un tableau de 9 notes, dont on fait ensuite saisir les valeurs par l'utilisateur.

*/

//Déclaration et remplissage du tableau
$tab=array();
$tab[0]=readline('Quelle est la note ? : ');
$tab[1]=readline('Quelle est la note ? : ');
$tab[2]=readline('Quelle est la note ? : ');
$tab[3]=readline('Quelle est la note ? : ');
$tab[4]=readline('Quelle est la note ? : ');
$tab[5]=readline('Quelle est la note ? : ');
$tab[6]=readline('Quelle est la note ? : ');
$tab[7]=readline('Quelle est la note ? : ');
$tab[8]=readline('Quelle est la note ? : ');

//Affichage du tableau
echo implode (" | ",$tab);
?>