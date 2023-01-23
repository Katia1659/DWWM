<?php


/* Ecrire un algo qui permet de saisir note d'une classe, puis afficher notes supérieures à la moy*/

//Initialisation valeurs
$note = array ();
$somnote = 0;
$notesup = array();
$countNotSup = 0;
$moy = 0;

$nbN = readline('Nombre de notes ? -> ');

// Implementation notes dans tableau
for ($i = 0; $i < $nbN; $i++) {
    $note[$i] = readline('Entrez une note -> ');

    $somnote +=  $note[$i];
    $moy = $somnote/$nbN;
       
    }

// Compteur de note sup 
for ($i=0; $i < $nbN; $i++) { 
     if ($note[$i] > $moy) {

        $countNotSup += 1; 
    }}
echo 'Moyenne : '.$moy."\n";    
echo 'Notes supérieures : ' . $countNotSup . "\n";

?>