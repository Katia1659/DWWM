<?php
/* Ecrire un algorithme qui perme de donner le résultat d'un étudiant à un module sachant que ce module est sanctionné par une note d'oral de coefficient 1 et une note d'écrit de coefficient 2. La moyenne obtenue doit etre supérieure ou égale a 10 pour valider le module

ecrire "mettre votre note d'ecrit "
ecrire "mettre votre note d'oral"

moyenne = n + n2*2/3

si moyenne > 10
ecrire "tu as validé ton module"
sinon ecrire "tu n'as pas validé ton module"
*/

//initialisation des valeurs
$n = readline ('Entrez votre note d\'ecrit  :');
$n2 = readline ('Entrez votre note d\'oral :');
$moyenne= 0;

$moyenne= ($n + ($n2 * 2)) / 3 ;

//boucle
if ($moyenne > 10) {
    echo 'tu as validé ton module';
}else {
    echo "tu n'as pas validé ton module";
}

