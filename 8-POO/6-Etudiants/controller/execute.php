<?php
include('../model/Etudiant.class.php');

$eleve1 = new Etudiant("Rashid","Mohamed","1995/01/02","INF","informatique");
$eleve2 = new Etudiant("Yves","Chakib","1992/04/02","INF","informatique");
$eleve3 = new Etudiant("Martin","Manal","2011/03/02","TIC","Techno de l'info et de communication");
$eleve4 = new Etudiant("Jacques","Meriem","2000/11/02","GC","Génie civil");
$eleve5 = new Etudiant("Rami","Mouad","2013/01/02","GC","Génie civil");


echo "La liste des filieres de notre ecole : ".PHP_EOL;
echo $eleve1->getFiliere()->__toString();
echo $eleve3->getFiliere()->__toString();
echo $eleve4->getFiliere()->__toString();

echo "Liste des etudiants par filiere : ".PHP_EOL;
echo $eleve1->getFiliere()->__toString();
echo $eleve1->__toString();
echo $eleve2->__toString();
echo $eleve3->getFiliere()->__toString();
echo $eleve3->__toString();
echo $eleve4->getFiliere()->__toString();
echo $eleve4->__toString();
echo $eleve5->__toString();

?> 