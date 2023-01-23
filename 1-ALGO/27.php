<?php
/**Ecrire un algorithme qui permet donner le résultat d'un étudiant à un module sachant que ce code que ce module est sanctionné par une note d'orale de coefficient 1 et une note d'"ctrit de coefficient 2.
 * la moyenne obtenue doit être supérieure ou égale à 10 pour valider le module 
 */

 echo "Début \n";
 // Déclaration de Variable!
 $notOral= readline('Entrer la note orale >>'."\n");
 $notEcrit=readline('Entrer la note écrit >>'."\n");

 //calcule de Moyenne Module
 $moyMod= (($notOral*1)+($notEcrit*2))/2;

 if ($moyMod>=10) {
    print "la Moyenne est : $moyMod, Module Valider";
 } else {
    print "la Moyenne est : $moyMod, Module non valider";
 }
 

?>