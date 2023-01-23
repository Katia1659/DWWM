<?php
/*
Toujours et encore sur le même principe, écrivez un algorithme
permettant, à l'utilisateur de saisir les notes d'une classe. Le
programme, une fois la saisie terminée, renvoie le nombre de ces
notes supérieures à la moyenne de la classe.
*/

//creation du tableau
$noteGrand = array();

//inisilisation de la var
$nbEleve = readline('Nombre deleve dans la classe');
$position = 0;
$note = 0;
$moyenne = 0;
$noteAdition = 0;
$i = 0;

//creation des boucles for
for ($i=0; $i < $nbEleve ; $i++) { 
    $note = readline('Entrez les notes ');
    $noteAdition = $noteAdition + $note;
    $moyenne = $noteAdition/$nbEleve;

        if ($note > $moyenne) {
            $noteGrand[$i] = $note;
            
            echo "**********\n";
        }
}
    

echo "\n";
echo 'voici la moyenne de la classe ';
echo $moyenne;
echo "\n";
echo 'et les note plus grande que la moyenne ';

for ($i=0; $i < sizeof($noteGrand) ; $i++) { 
    echo $noteGrand[$i];
    echo "\n";
}
?>